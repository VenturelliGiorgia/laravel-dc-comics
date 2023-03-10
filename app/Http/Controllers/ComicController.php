<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data = $request->validate([
            "title" => "required|min:1|max:255",
            "description" => "required|string",
            "thumb" => "required|url",
            "price" => "required",
            "series" => "required|string",
            "sale_date" => "required",
            "type" => "required|string",
        ]);

        $comic = new Comic();
        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->thumb = $data["thumb"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
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
        if (!$comic) {
            abort(404, "non esiste");
        }
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $data = $request->validate([
            "title" => "required|min:2|max:255",
            "description" => "required|string",
            "thumb" => "required|url",
            "price" => "required",
            "series" => "required|string",
            "sale_date" => "required",
            "type" => "required|string",
        ]);

        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
