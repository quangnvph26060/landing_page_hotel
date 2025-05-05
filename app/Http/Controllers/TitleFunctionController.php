<?php

namespace App\Http\Controllers;

use App\Models\TitleFunction;
use Illuminate\Http\Request;

class TitleFunctionController extends Controller
{
    //

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        $item = TitleFunction::first();
        if ($item) {
            $item->update($request->only('title', 'content'));
        } else {
            TitleFunction::create($request->only('title', 'content'));
        }

        return redirect()->back()->with('success', 'Đã cập nhật thành công!');
    }
}
