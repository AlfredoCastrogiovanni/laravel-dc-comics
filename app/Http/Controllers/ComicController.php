<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return View('guest.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'min:4', 'max:50'],
            'description' => ['required', 'min:5', 'max:2000'],
            'thumb' => ['required', 'url:http,https'],
            'price' => ['required', 'min:1', 'max:50'],
            'series' => ['required', 'min:4', 'max:50'],
            'sale_date' => ['required', 'date'],
            'type' => ['required', 'min:3', 'max:40'],
        ]);

        $newComic = Comic::create($data);
        return redirect()->route('guest.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return View('guest.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'min:4', 'max:50'],
            'description' => ['required', 'min:5', 'max:2000'],
            'thumb' => ['required', 'url:http,https'],
            'price' => ['required', 'min:1', 'max:50'],
            'series' => ['required', 'min:4', 'max:50'],
            'sale_date' => ['required', 'date'],
            'type' => ['required', 'min:3', 'max:40'],
        ]);
        $comic->update($request->all());
        return redirect()->route('guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
