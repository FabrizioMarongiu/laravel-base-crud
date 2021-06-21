<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        // $comics = Comic::paginate(5);
        //dump($comics);
        

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
    public function store(Request $request)
    {
        $data = $request->all();
        // dump($data);

        $new_comic = new Comic();

        // $new_comic->title = $data['title'];
        // $new_comic->slug = str::slug($new_comic->title, '-');
        // $new_comic->description = $data['description'];
        // $new_comic->image = $data['image'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];

        $data['slug'] = str::slug($data['title'], '-');
        // $data['sale_date'] = date('created_at');


        $new_comic->fill($data);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic->id); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //Get Comic by id
        // $comic = Comic::find($id);
        
        if($comic){
            return view('comics.show', compact('comic'));
        }

        abort(404); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comic = Comic::find($id)
        if($comic){
            return view('comics.edit', compact('comic'));
        }

        abort(404);

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
        //Get form Data
        $data = $request->all();

        $comic = Comic::find($id);
        
        $comic['slug']= str::slug($data['title'], '-');

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
        $comic = Comic::find($id);

        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', $comic->title );
    }
}
