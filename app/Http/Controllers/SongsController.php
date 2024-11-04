<?php

namespace App\Http\Controllers;
use App\Models\Song;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', ["songs" => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $song = new Song();
        // $song->title = $request->input("title");
        // $song->artist = $request->input("artist");
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'artist' => 'required',
        ]);
        //dd($validatedData);
        $song = new Song();
        $song->title = $validatedData['title'];
        $song->artist = $validatedData['artist'];

        $song->save();
        return redirect("songs");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = Song::findorFail($id);
        return view('songs.show', compact("song"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::find($id);
        return view('songs.edit', compact("song"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::find($id);
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'artist' => 'required',
        ]);

        //dd($validatedData);
        $song->title = $validatedData['title'];
        $song->artist = $validatedData['artist'];

        $song->save();
        return redirect("songs");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id);
        $song->delete();
        return redirect("songs");
    }
}
