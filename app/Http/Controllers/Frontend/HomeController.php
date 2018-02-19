<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\News;

class HomeController extends Controller
{
    /** @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View */
    public function index()
    {
        $slider = News::orderBy('created_at', 'desc')->take(5)->get();
        $news   = News::whereNotIn('id', [
            $slider->map(function ($item) {
                return $item->id;
            })->toArray()
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('frontend.home.index', [
            'news'   => $news,
            'slider' => $slider
        ]);
    }
}
