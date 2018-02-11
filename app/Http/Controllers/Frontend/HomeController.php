<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\News;

class HomeController extends Controller
{
    /** @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View */
    public function index()
    {
        $latest = News::orderBy('created_at', 'desc')->take(1)->get()->first();
        $news   = News::where('id', '!=', $latest->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.home.index', [
            'news'   => $news,
            'latest' => $latest
        ]);
    }
}
