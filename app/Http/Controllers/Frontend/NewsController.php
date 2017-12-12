<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        return view('frontend.news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();

        return view('frontend.news.edit', [
            "categories" => $categories,
            "news" => new News()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            "user_id" => Auth::user()->id,
            "category_id" => $request->get("category_id"),
            "title" => utf8_encode($request->get("title")),
            "sub_title" => utf8_encode($request->get("sub_title")),
            "summary" => utf8_encode($request->get("summary")),
            "sub_summary" => utf8_encode($request->get("sub_summary")),
            "image_url" => $request->get("image_url"),
            "link_1" => $request->get("link_1"),
            "link_2" => $request->get("link_2"),
            "link_3" => $request->get("link_3")
        ]);

        return redirect()->route('news.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        if ($news->user->id !== Auth::user()->id) {
            return redirect()->route('login');
        }

        $categories = Category::where('status', 1)->get();

        return view('frontend.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->category_id = $request->get("category_id");
        $news->title = utf8_encode($request->get("title"));
        $news->sub_title = utf8_encode($request->get("sub_title"));
        $news->summary = utf8_encode($request->get("summary"));
        $news->sub_summary = utf8_encode($request->get("sub_summary"));
        $news->image_url = $request->get("image_url");
        $news->link_1 = $request->get("link_1");
        $news->link_2 = $request->get("link_2");
        $news->link_3 = $request->get("link_3");

        $news->update();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        if ($news->user->id === Auth::user()->id) {
            $news->delete();
        }

        \request()->session()->flash('success', 'Noticia eliminada correctamente');

        return redirect()->back();
    }

    /**
     * @param News $news
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(News $news)
    {
        return view('frontend.news.show', [
            'new' => $news
        ]);
    }
}
