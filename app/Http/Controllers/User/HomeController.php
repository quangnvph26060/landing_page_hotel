<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Config;
use App\Models\Functions;
use App\Models\Highlight;
use App\Models\Post;
use App\Models\Technology;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){

        $banner = Banner::first();
        $function = Functions::get();
        $post = Post::get();
        $highlight = Highlight::first();
        $technologie = Technology::get();
        $config = Config::first();
        return view('frontend.layouts.master', compact('banner', 'function', 'post', 'highlight', 'technologie', 'config'));
    }
}
