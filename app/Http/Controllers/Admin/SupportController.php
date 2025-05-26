<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupportRequest;
use App\Models\Support;
use App\Services\BaseQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupportController extends Controller
{
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Support::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (request()->ajax()) {
            $columns    = ['id', 'title', 'slug', 'description', 'address', 'status', 'type'];

            $query      = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable
                    ->editColumn('title', fn ($row) => " <a href='" . route('admin.support.edit', $row) . "'>
                    <strong>{$row->title}</strong>
                </a>")
                    ->editColumn('statuss', fn ($row) => $row->status == 1
                        ? '<span class="badge bg-success">Xuất bản</span>'
                        : '<span class="badge bg-warning">Chưa xuất bản</span>')
                    ->editColumn('types', fn ($row) => $row->type == 'customer'
                        ? '<span class="badge bg-primary">Khách hàng</span>'
                        : '<span class="badge bg-info text-dark">Tin tức</span>')
                    ->editColumn('description', function ($row) {
                            return Str::limit(strip_tags($row->description), 100, '...');
                        });
            }, ['title', 'statuss', 'types']);
        }
        return view('backend.support.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.support.save');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupportRequest $request)
    {
        return transaction(function () use ($request) {

            $credentials = $request->validated();


            if (!$credentials['slug']) {
                $credentials['slug'] = generateSlug($credentials['title']);
            }

            Support::create($credentials);

            sessionFlash('success', 'Thêm mới bài thành công.');

            return handleResponse('Thêm mới bài thành công.', 201);
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support)
    {
        //
        // dd($post);
        return view('backend.support.save', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupportRequest $request, Support $support)
    {

        return transaction(function () use ($request, $support) {

            $credentials = $request->validated();


            if (!$credentials['slug']) {
                $credentials['slug'] = generateSlug($credentials['title']);
            }



            $support->update($credentials);

            sessionFlash('success', 'Thêm  thành công.');

            return handleResponse('Thêm  thành công.', 201);
        });
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support)
    {
        //
    }
}
