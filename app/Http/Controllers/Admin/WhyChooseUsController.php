<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReasonRequest;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $why = WhyChooseUs::first() ?? [];
        return view('backend.config.whychooseus', compact('why'));
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
    public function store(ReasonRequest $request)
    {
        $why = WhyChooseUs::first() ?? new WhyChooseUs();

        $why->reason = $request->input('reason');

        if ($request->hasFile('video_1_url')) {
            if ($why->video_1_url && Storage::disk('public')->exists($why->video_1_url)) {
                Storage::disk('public')->delete($why->video_1_url);
            }

            $why->video_1_url = $request->file('video_1_url')->store('why_choose_us', 'public');
        }

        if ($request->hasFile('video_2_url')) {
            if ($why->video_2_url && Storage::disk('public')->exists($why->video_2_url)) {
                Storage::disk('public')->delete($why->video_2_url);
            }

            $why->video_2_url = $request->file('video_2_url')->store('why_choose_us', 'public');
        }

        $why->save();
        sessionFlash('success', 'Cập nhật thành công.');
        return redirect()->back();

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
