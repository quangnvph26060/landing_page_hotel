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
        $post = Post::where('type', 'customer')->get();
        $highlight = Highlight::first();
        $technologie = Technology::get();
        $config = Config::first();
        return view('frontend.home.index', compact('banner', 'function', 'post', 'highlight', 'technologie', 'config'));
    }

    public function service(){

        $banner = Banner::first();
        $function = Functions::get();
        $post = Post::get();
        $highlight = Highlight::first();
        $technologie = Technology::get();
        $config = Config::first();
        return view('frontend.service.index', compact('banner', 'function', 'post', 'highlight', 'technologie', 'config'));
    }

    public function post(){

        $banner = Banner::first();
        $function = Functions::get();
        $post = Post::orderBy('created_at', 'desc')->get();
        $postnews = Post::orderBy('created_at', 'desc')->limit(5)->get();
        $highlight = Highlight::first();
        $technologie = Technology::get();
        $config = Config::first();
        return view('frontend.post.index', compact('banner', 'function', 'post', 'highlight', 'technologie', 'config', 'postnews'));
    }

    public function postDetail($slug){

        $banner = Banner::first();
        $post = Post::where('slug', $slug)->first();
        if(!$post){
            return redirect()->route('post');
        }
        $postnews = Post::orderBy('created_at', 'desc')->limit(5)->get();

        $config = Config::first();
        return view('frontend.post.detail', compact('banner',  'post', 'config', 'postnews'));
    }
}
