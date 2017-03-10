<?php

namespace App\Http\Controllers;

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
        $news = News::all();
        return view('pages.news', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //определяем папку для сохранения картинок
        $root=$_SERVER['DOCUMENT_ROOT']. "/images/news/";

        //>Сохраняем картинки на диск и записываем в БД
        //генерируем свое имя на случай повторяющихся имен
        $file = $request->file('preview');
        if($file != '') {
            $f_name = str_random(6) . '.' . $file->getClientOriginalExtension();
            //сохраняем оригинал
            $file->move($root, $f_name);
            $url_img = "/images/news/" . $f_name;
        } else $url_img = '';
        //сохраняем в нашу БД
        $news=new News;
        $news->title=$request->title;
        $news->description=$request->description;
        $news->preview=$url_img;
        $news->save();

        //страницу с надписью об успешном добавлении photo_name
        return view('actions.success')->with('news_name', $news->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

        return view('single.news', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
