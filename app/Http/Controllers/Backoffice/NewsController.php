<?php namespace App\Http\Controllers\Backoffice;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backoffice.news.index', [
            'news' => News::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('backoffice.news.edit', [
            'news' => $news,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\News $news
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

        $news->save();

        return redirect()->route('backoffice.news.edit', ['id' => $news->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('backoffice.news.index');
    }
}
