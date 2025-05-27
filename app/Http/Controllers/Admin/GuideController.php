<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\GuidesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class GuideController extends Controller
{
  public function categories()
  {
    $categories = GuidesCategory::all();
    return response()->json($categories);
  }

  // Lấy danh sách tất cả guides (có kèm category luôn)
  public function getPosts(Request $request)
  {
    $categoryId = $request->get('category_id');

    $posts = Guide::where('category_id', $categoryId)->get();

    return response()->json($posts);
  }
  protected function rulesForAdd()
  {
    return [
      'name' => [
        'required',
        'string',
        Rule::unique('guides_categories'),
      ],
    ];
  }

  protected function rulesForEdit($id)
  {
    return [
      'name' => [
        'required',
        'string',
        Rule::unique('guides_categories')->ignore($id, 'id'),
      ],
    ];
  }
  protected function rulesForAddPost($request)
  {
    return [
      'title' => [
        'required',
        'string',
        'max:255',
        Rule::unique('guides')->where(function ($query) use ($request) {
          return $query->where('category_id', $request->category_id);
        }),
      ],
      'content' => 'required|string',
      'category_id' => 'required|integer|exists:guides_categories,id',
    ];
  }

  protected function rulesForEditPost($request, $id)
  {
    return [
      'title' => [
        'required',
        'string',
        'max:255',
        Rule::unique('guides')->where(function ($query) use ($request) {
          return $query->where('category_id', $request->category_id);
        })->ignore($id, 'id'),
      ],
      'content' => 'required|string',
      'category_id' => 'required|integer|exists:guides_categories,id',
    ];
  }
  public function addCategorie(Request $request)
  {
    $id = $request->id;
    if ($id) {
      $rules = $this->rulesForEdit($id);
    } else {
      $rules = $this->rulesForAdd();
    }

    $request->validate($rules, [
      'name.required' => 'Vui lòng nhập tên danh mục.',
      'name.string'   => 'Tên danh mục phải là chuỗi.',
      'name.unique'   => 'Tên danh mục đã tồn tại.',
    ]);


    if (!$id) {
      $categories = new GuidesCategory();
      $message    = "Thêm danh mục thành công";
    } else {

      $categories = GuidesCategory::find($id);

      if (!$categories) {
        return response()->json(['status' => 'error', 'msg' => 'Danh mục không tồn tại'], 404);
      }
      $message = "Cập nhật danh mục thành công";
    }

    $categories->name = $request->name;
    $categories->slug = Str::slug($request->name);
    $categories->save();

    return response()->json([
      'status' => 'success',
      'msg'    => $message,
      'data'   => $categories, // Trả luôn danh mục để frontend cập nhật nếu muốn
    ]);
  }
  public function addPost(Request $request)
  {
    $id = $request->id;

    // Chọn rule tương ứng
    $rules = $id ? $this->rulesForEditPost($request, $id) : $this->rulesForAddPost($request);

    // Validate
    $request->validate($rules, [
      'title.required' => 'Vui lòng nhập tiêu đề.',
      'title.string'   => 'Tiêu đề phải là chuỗi.',
      'title.unique'   => 'Tiêu đề đã tồn tại.',
      'content.required' => 'Vui lòng nhập nội dung.',
      'category_id.required' => 'Vui lòng chọn danh mục.',
      'category_id.exists'   => 'Danh mục không hợp lệ.',
    ]);

    // Thêm hoặc cập nhật
    if (!$id) {
      $post = new Guide();
      $message = "Thêm bài viết thành công";
    } else {
      $post = Guide::find($id);
      if (!$post) {
        return response()->json(['status' => 'error', 'msg' => 'Bài viết không tồn tại'], 404);
      }
      $message = "Cập nhật bài viết thành công";
    }

    $post->title = $request->title;
    $post->slug = Str::slug($request->title);
    $post->content = $request->content;
    $post->category_id = $request->category_id;
    $post->save();

    return response()->json([
      'status' => 'success',
      'msg'    => $message,
      'data'   => $post,
    ]);
  }
  public function findPost($id)
  {
    // Tìm bài viết theo id
    $post = Guide::find($id);

    if (!$post) {
      // Nếu không tìm thấy trả về lỗi 404
      return response()->json([
        'status' => 'error',
        'message' => 'Không tìm thấy bài viết'
      ], 404);
    }

    // Trả về dữ liệu bài viết dạng JSON
    return response()->json([
      'status' => 'success',
      'data' => $post
    ]);
  }
  public function deletePost($id)
  {
    $post = Guide::find($id);

    if (!$post) {
      return response()->json(['message' => 'Bài viết không tồn tại'], 404);
    }

    $post->delete();

    return response()->json(['message' => 'Đã xóa thành công'], 200);
  }
  public function deleteCategory($id)
  {
    // Tìm category theo ID truyền vào
    $category = GuidesCategory::find($id);

    // Nếu không tìm thấy category thì trả về phản hồi JSON với mã lỗi 404
    if (!$category) {
      return response()->json(['message' => 'Không tìm thấy danh mục'], 404);
    }

    try {
      $category->guides()->delete();

      $category->delete();

      // Trả về phản hồi JSON thông báo xoá thành công, mã 200
      return response()->json(['message' => 'Xoá danh mục thành công'], 200);
    } catch (\Exception $e) {
      // Nếu có lỗi trong quá trình xoá thì trả về phản hồi JSON với mã lỗi 500
      return response()->json(['message' => 'Xoá danh mục thất bại'], 500);
    }
  }
}
