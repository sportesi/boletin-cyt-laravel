<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index()
    {
        $news = News::where(function ($q) {
            $q->where('summary', 'LIKE', '%' . \request('search') . '%')
                ->orWhere('sub_summary', 'LIKE', '%' . \request('search') . '%')
                ->orWhere('title', 'LIKE', '%' . \request('search') . '%');
        })->orderBy('date', 'desc')->paginate(3);

        return view('frontend.search.index', [
            'news' => $news->appends(Input::except('page'))
        ]);
    }
}
