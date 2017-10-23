<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\News;

class HomeController extends Controller
{
    /** @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(3);
        $slider = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('frontend.home.index', [
            'news' => $news,
            'slider' => $slider
        ]);
    }
}
