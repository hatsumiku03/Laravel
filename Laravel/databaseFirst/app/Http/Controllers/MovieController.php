<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $all = Movie::all();
        return view('net', compact('all'));
        //return view('net')->with('movies', Movie::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie -> title = $request->title;
        $movie -> duration = $request->duration;
        $movie -> save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::find($id);
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ! Esto es lo último que hice, tengo que hacer que el edit.blade.php funcione correctamente para editar
        $movie = Movie::find($id);
        $movie->title = $request->input('title');
        $movie->duration = $request->input('duration');

        $movie->save();
        return redirect('/')->with('success', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('movies')->where('id', '=', $id)->delete();
        return redirect('/');
    }
}
