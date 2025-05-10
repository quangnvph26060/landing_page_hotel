<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use App\Models\Price;
use App\Services\BaseQuery;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Price::class);

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $columns    = ['id', 'name', 'description', 'recommended', 'price'];

            $query      = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable
                    ->editColumn('name', fn($row) => "
                    <a href='" . route('admin.prices.edit', $row) . "'>
                        <strong>{$row->name}</strong>
                    </a>")
                    ->editColumn('description', fn($row) => strip_tags($row->description))
                    ->editColumn('price', fn($row) => number_format($row->price))
                    ->editColumn('recommended', fn($row) => $row->recommended == 'true'
                        ? '<span class="badge bg-success">Nổi bật</span>'
                        : '<span class="badge bg-warning">Thường</span>');
            }, ['name', 'recommended', 'description']);
        }
        return view('backend.price.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.price.save');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PriceRequest $request)
    {
        // dd($request->all());
        return transaction(function () use ($request) {

            $credentials = $request->validated();


            Price::create($credentials);

            sessionFlash('success', 'Thêm mới bảng giá thành công.');

            return handleResponse('Thêm mới bảng giá thành công.', 201);
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Price $price)
    {
        //
        return view('backend.price.save', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceRequest $request, Price $price)
    {
        // dd($request->all());
        return transaction(function () use ($request, $price) {

            $credentials = $request->validated();


            $price->update($credentials);

            sessionFlash('success', 'Sửa bảng giá thành công.');

            return handleResponse('Sửa bảng giá thành công.', 201);
        });
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
