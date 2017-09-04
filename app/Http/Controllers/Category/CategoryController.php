<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;

class CategoryController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);
        $news = News::where('category_id', $id)->paginate(3);

        return view('category.index', [
            'category' => $category,
            'news' => $news,
        ]);
    }
}
