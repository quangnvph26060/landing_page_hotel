<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Technology;
use App\Services\BaseQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Technology::class);
    }
    public function index()
    {
        //
        if (request()->ajax()) {
            $columns = ['id', 'icon', 'title', 'description'];

            $query = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable
                    ->editColumn('title', fn ($row) => "<strong class='edit' data-title='{$row->title}' data-icon='{$row->icon}' data-description='{$row->description}'>{$row->title}</strong>")
                    ->editColumn('description', fn ($row) => "<div>$row->description</div>");
            }, ['title', 'description']);
        }

        return view('backend.config.support');
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
        $technology = new Technology();
        $technology->title = $request->title;
        $technology->description = $request->description ?? '';
        $technology->icon = $request->icon ?? '';

        $technology->save();


        return handleResponse("thành công", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $technology = Technology::find($request->id);
        if (!$technology) {
            return handleResponse("không tìm thấy", 404);
        }

        $technology->title = $request->title;
        $technology->description = $request->description;
        $technology->icon = $request->icon;

        $technology->save();

        return handleResponse("thành công", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        //
    }
}
