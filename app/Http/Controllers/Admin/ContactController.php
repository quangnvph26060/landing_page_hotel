<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\BaseQuery;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new BaseQuery(Contact::class);
    }
    public function index()
    {

        if (request()->ajax()) {
            $columns = ['id', 'name'];

            $query = $this->queryBuilder->buildQuery(
                $columns,
                [],
                [],
                request()
            );

            return $this->queryBuilder->processDataTable($query, function ($dataTable) {
                return $dataTable->editColumn('name', fn ($row) => "<strong class='edit' data-title='{$row->name}' >{$row->name}</strong>");
            }, ['name']);
        }

        return view('backend.contact.index'); // Đã sửa lỗi thiếu dấu ;
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
        $functions = new Contact();
        $functions->name = $request->name;

        $functions->save();

        return handleResponse("thành công", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Contact $contact)
    {

        $contact = Contact::find($request->id);
        if (!$contact) {
            return handleResponse("không tìm thấy", 404);
        }

        $contact->name = $request->name;

        $contact->save();

        return handleResponse("thành công", 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
