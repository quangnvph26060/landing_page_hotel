<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $highlight = Highlight::first() ?? [];
        // dd($highlights);

        return view('backend.config.highlight', compact('highlight'));
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

        $data = [];

        if ($request->hasFile('image')) {
            $data['image'] = saveImages($request, 'image', 'highlight');
        }
        if ($request->hasFile('banner')) {
            $data['banner'] = saveImages($request, 'banner', 'highlight');
        }

        $data['title'] = $request->title;

        $json = $request->only(['icon', 'name', 'description']);

        // Định dạng lại dữ liệu
        $formattedData = [];
        foreach ($json['icon'] as $index => $icon) {
            $formattedData[] = [
                'icon' => $icon,
                'name' => $json['name'][$index] ?? '',
                'description' => $json['description'][$index] ?? ''
            ];
        }
        $data['content'] = json_encode($formattedData, JSON_UNESCAPED_UNICODE);

        $highlight = Highlight::first();

        Highlight::updateOrCreate(
            ['id' => optional($highlight)->id],
            $data
        );

        sessionFlash('success', 'Cập nhật thành công.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Highlight $highlight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Highlight $highlight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Highlight $highlight)
    {
        //
    }
}
