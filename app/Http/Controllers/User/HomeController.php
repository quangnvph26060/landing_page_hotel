<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Config;
use App\Models\Functions;
use App\Models\GuidesCategory;
use App\Models\Highlight;
use App\Models\Post;
use App\Models\Price;
use App\Models\Technology;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {

        $banner = Banner::first();
        $function = Functions::get();
        $post = Post::where('type', 'customer')->orderBy('created_at', 'desc')->limit(6)->get();
        $post_highlight = Post::where('type', 'post')->orderBy('created_at', 'desc')->limit(5)->get();
        $highlight = Highlight::first();
        $technologie = Technology::get();
        $config = Config::first();
        $reason = WhyChooseUs::first() ?? [];
        return view('frontend.home.index', compact('banner', 'function', 'post', 'highlight', 'technologie', 'config', 'reason', 'post_highlight'));
    }

    public function service()
    {

        $prices = Price::get();
        $function = Functions::get();
        $post = Post::get();
        $highlight = Highlight::first();
        $technologie = Technology::get();

        return view('frontend.service.index', compact('function', 'post', 'highlight', 'technologie', 'prices'));
    }

    public function post()
    {

        $function = Functions::get();
        $post = Post::where('type', 'post')->orderBy('created_at', 'desc')->get();
        $postnews = Post::where('type', 'post')->orderBy('created_at', 'desc')->limit(5)->get();
        $highlight = Highlight::first();
        $technologie = Technology::get();

        return view('frontend.post.index', compact('function', 'post', 'highlight', 'technologie', 'postnews'));
    }

    public function postDetail($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post) {
            return redirect()->route('post');
        }
        $postnews = Post::where('type', 'post')->orderBy('created_at', 'desc')->limit(5)->get();

        return view('frontend.post.detail', compact('post', 'postnews'));
    }
    // hỗ trợ
    public function suport()
    {
        return view('frontend.support.index');
    }
    public function suportDetail($slug)
    {
        // Tìm category theo slug, kèm theo các guides liên quan
        $category = GuidesCategory::where('slug', $slug)
            ->with(['guides' => function ($query) {
                $query->select('id', 'title', 'content', 'category_id');
            }])
            ->first();

        if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy danh mục'
            ], 404);
        }

        // Chuẩn bị dữ liệu trả về
        $data = [
            'category' => [
                'name' => $category->name,
                'slug' => $category->slug,
            ],
            'guides' => $category->guides->map(function ($guide) {
                return [
                    'title' => $guide->title,
                    'content' => $guide->content,
                ];
            }),
        ];

        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
    }

    public function categorieSupport()
    {
        $categories =  GuidesCategory::select('name', 'slug')->get();
        return response()->json([
            'success' => true,
            'data' => $categories,
        ]);
    }
}
