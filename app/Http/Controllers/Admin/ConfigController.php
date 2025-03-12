<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $config = Config::first() ?? [];
        return view('backend.config.company', compact('config'));
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
        // dd($request->all());
        $data = [];

        if ($request->hasFile('logo')) {
            $data['logo'] = saveImages($request, 'logo', 'config');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = saveImages($request, 'icon', 'config');
        }

        $data['company']    = $request->company;
        $data['email']      = $request->email;
        $data['hotline']    = $request->hotline;
        $data['address']    = $request->address;
        $data['salesPhone'] = $request->salesPhone;
        $data['carePhone']  = $request->carePhone;
        $data['footer']     = $request->footer;

        $config = Config::first();

        Config::updateOrCreate(
            ['id' => optional($config)->id],
            $data
        );

        sessionFlash('success', 'Cập nhật thành công.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Config $config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Config $config)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Config $config)
    {
        //
    }
}
