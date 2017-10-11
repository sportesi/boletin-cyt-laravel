<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);
        $news = News::where('category_id', $id)->paginate(3);

        return view('frontend.category.index', [
            'category' => $category,
            'news' => $news,
        ]);
    }
}
