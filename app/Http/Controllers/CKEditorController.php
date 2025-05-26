<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file     = $request->file('upload');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();

            $image = Image::make($file)
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio(); // giữ tỷ lệ
                    $constraint->upsize(); // không phóng to ảnh nhỏ
                })
                ->encode('jpg', 80); // giảm chất lượng về 80% để nhẹ hơn

            $path = public_path('uploads/ckeditor/' . $filename);
            $image->save($path);

            $url = asset('uploads/ckeditor/' . $filename);

            // CKEditor expects this JSON format
            return response()->json([
                'uploaded' => 1,
                'fileName' => $filename,
                'url' => $url,
            ]);
        }

        return response()->json(['uploaded' => 0, 'error' => ['message' => 'No file uploaded.']]);
    }
}
