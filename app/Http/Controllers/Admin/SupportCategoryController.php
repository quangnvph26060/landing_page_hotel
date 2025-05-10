<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SupportCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupportCategoryController extends Controller
{
    public function index()
    {
        // Lấy tất cả category cha cùng với các category con
        $categories = \App\Models\SupportCategory::with('children')->whereNull('parent_id')->get();

        return response()->json([
            'data' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:support_categories,slug',
            'parent_id' => 'nullable|exists:support_categories,id',
        ]);

        $slug = $request->slug ?? Str::slug($request->name);

        $category = SupportCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'parent_id' => $request->parent_id,
        ]);

        return response()->json([
            'message' => 'Category created successfully.',
            'data' => $category
        ], 201);
    }
}
