<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('pages.offers', ['offers' => $offers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.offers');
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
        $root=$_SERVER['DOCUMENT_ROOT']. "/images/offers/";

        //>Сохраняем картинки на диск и записываем в БД
        //генерируем свое имя на случай повторяющихся имен
        $file = $request->file('preview');
        if($file != '') {
            $f_name = str_random(6) . '.' . $file->getClientOriginalExtension();
            //сохраняем оригинал
            $file->move($root, $f_name);
            $url_img = "/images/offers/" . $f_name;
        } else $url_img = '';
        //сохраняем в нашу БД
        $offers= new Offer;
        $offers->title=$request->title;
        $offers->description=$request->description;
        $offers->preview=$url_img;
        $offers->save();

        //страницу с надписью об успешном добавлении
        return view('actions.success')->with('offers_name', $offers->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('single.offer', ['offer' => $offer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
