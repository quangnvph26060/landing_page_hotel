<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\BaseQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{

    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Post::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (request()->ajax()) {
            $columns    = ['id', 'title', 'slug', 'image', 'address', 'status', 'type'];

            $query      = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable
                    ->editColumn('title', fn($row) => " <a href='" . route('admin.posts.edit', $row) . "'>
                    <strong>{$row->title}</strong>
                </a>")
                    ->editColumn('statuss', fn($row) => $row->status == 1
                        ? '<span class="badge bg-success">Xuất bản</span>'
                        : '<span class="badge bg-warning">Chưa xuất bản</span>')
                        ->editColumn('types', fn($row) => $row->type == 'customer'
                        ? '<span class="badge bg-primary">Khách hàng</span>'
                        : '<span class="badge bg-info text-dark">Tin tức</span>');

            }, ['title', 'statuss', 'types']);
        }
        return view('backend.post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.post.save');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        return transaction(function () use ($request) {

            $credentials = $request->validated();


            if (!$credentials['slug']) {
                $credentials['slug'] = generateSlug($credentials['title']);
            }

            if ($request->hasFile('image')) {
                $credentials['image'] = saveImages($request, 'image', 'post');
            }

            Post::create($credentials);

            sessionFlash('success', 'Thêm mới bài thành công.');

            return handleResponse('Thêm mới bài thành công.', 201);
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        // dd($post);
        return view('backend.post.save', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {

        return transaction(function () use ($request, $post) {

            $credentials = $request->validated();


            if (!$credentials['slug']) {
                $credentials['slug'] = generateSlug($credentials['title']);
            }

            if ($request->hasFile('image')) {
                $credentials['image'] = saveImages($request, 'image', 'post');
            }

            $post->update($credentials);

            sessionFlash('success', 'Thêm mới bài thành công.');

            return handleResponse('Thêm mới bài thành công.', 201);
        });
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
