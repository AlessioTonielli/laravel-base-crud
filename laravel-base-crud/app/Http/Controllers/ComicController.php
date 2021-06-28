<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{

    public function home()
    {
        $comics = Comic::all();
        return view("comics.home", ['comics' => $comics]); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $request->validate([
            "title" => "required|max:100|min:3",
            "series" => "max:100",
            "type" => "max:50",
            "price" => "numeric",
            "sale_date" => "date",
        ]);

        $newComic = new Comic();
        $newComic->title = $newComicData['title'];
        $newComic->series = $newComicData['series'];
        $newComic->poster = $newComicData['poster'];
        $newComic->price = $newComicData['price'];
        $newComic->type = $newComicData['type'];
        $newComic->sale_date = $newComicData['sale_date'];
        $newComic->description = $newComicData['description'];

        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show', ['comic' => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "title" => "required|max:100|min:3",
            "series" => "max:100",
            "type" => "max:50",
            // "price" => "numeric|max:5",
            "sale_date" => "date",
        ]);
        $comic = Comic::find($id);
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }

    
}
