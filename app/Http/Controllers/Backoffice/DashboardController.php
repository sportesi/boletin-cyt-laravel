<?php

namespace App\Http\Controllers\Backoffice;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $recentNews = News::orderBy('id', 'desc')->limit(8)->get();
        $recentUsers = User::orderBy('id', 'desc')->limit(8)->get();
        $newsCount = News::count();
        $validatedUsers = User::where(['validated' => 1])->count();
        $nonValidatedUsers = User::where(['validated' => 0])->count();
        $categories = Category::count();


        return view('backoffice.dashboard.index', [
            'recentNews' => $recentNews,
            'recentUsers' => $recentUsers,
            'newsCount' => $newsCount,
            'validatedUsers' => $validatedUsers,
            'nonValidatedUsers' => $nonValidatedUsers,
            'categories' => $categories,
        ]);
    }
}
