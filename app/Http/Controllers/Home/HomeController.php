<?php

namespace App\Http\Controllers;

use App\News;

class HomeController extends Controller
{
    /** @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View */
    public function index()
    {
        $news = News::orderBy('date', 'desc')->paginate(3);

        return view('home.index', [
            'news' => $news
        ]);
    }
}
