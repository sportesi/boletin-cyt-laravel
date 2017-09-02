<?php

namespace App\Http\Controllers;

use App\News;

class HomeController extends Controller
{
    /** @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View */
    public function index()
    {
        $news = News::orderBy('date', 'desc')->paginate(3);
        $slider = News::orderBy('date', 'desc')->take(5)->get();

        return view('home.index', [
            'news' => $news,
            'slider' => $slider
        ]);
    }
}
