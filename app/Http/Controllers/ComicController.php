<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('comics.index', compact('comics'));
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
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();
        $new_comic = new Comic();
        $form_data['slug'] = Str::slug($new_comic->title,'-',$new_comic->series);
        if(!$form_data['thumb']){
            $form_data['thumb']='https://static.posters.cz/image/1300/poster/dc-comics-rebirth-i80856.jpg';
        }
        $new_comic->fill($form_data);

        // $new_comic->title=$form_data['title'];
        // $new_comic->slug=Str::slug($new_comic->title,'-',$new_comic->series);
        // $new_comic->description=$form_data['description'];
        // $new_comic->thumb=$form_data['thumb'];
        // $new_comic->price=$form_data['price'];
        // $new_comic->series=$form_data['series'];
        // $new_comic->sale_date=$form_data['sale_date'];
        // $new_comic->type=$form_data['type'];
        // $new_comic->artists=$form_data['artists'];
        // $new_comic->writers=$form_data['writers'];
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data=$request->all();

        if($form_data['title'] != $comic->title || $form_data['series'] != $comic->series ){
            $form_data['slug'] = Str::slug($comic->title,'-',$comic->series);
        }

        $comic->update($form_data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)

    {
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', "L'elemento $comic->title è stato eliminato correttamente." );
    }
}