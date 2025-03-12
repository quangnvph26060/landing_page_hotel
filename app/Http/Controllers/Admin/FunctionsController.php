<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Functions;
use App\Services\BaseQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Functions::class);
    }
    public function index()
    {
        if (request()->ajax()) {
            $columns = ['id', 'title', 'image', 'description'];

            $query = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable
                    ->editColumn('title', fn ($row) => "<strong class='edit' data-title='{$row->title}' data-image='{$row->image}' data-description='{$row->description}'>{$row->title}</strong>")
                    ->editColumn('description', fn ($row) => "<div>$row->description</div>");
            }, ['title', 'description']);
        }

        return view('backend.function.index'); // Đã sửa lỗi thiếu dấu ;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $functions = new Functions();
        $functions->title = $request->title;
        $functions->description = $request->description ?? '';

        // Nếu có ảnh, lưu ảnh vào thư mục 'functions'
        if ($request->hasFile('image')) {
            $functions->image = saveImages($request, 'image', 'functions');
        }

        // Lưu vào database
        $functions->save();

        return handleResponse("thành công", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Functions $functions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Functions $functions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Functions $functions)
    {
        // Tìm bản ghi theo ID
        $functions = Functions::find($request->id);
        if (!$functions) {
            return handleResponse("không tìm thấy", 404);
        }

        $functions->title = $request->title;
        $functions->description = $request->description;

        if ($request->hasFile('image')) {
            $functions->image = saveImages($request, 'image', 'functions');
        }

        $functions->save();

        return handleResponse("thành công", 201);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Functions $functions)
    {
        //
    }
}
