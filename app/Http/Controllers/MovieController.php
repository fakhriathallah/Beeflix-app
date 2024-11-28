<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    //

    public function indexData()
    {
        $movies = Movie::paginate(3);
        return view('clients.index', compact('movies'));
    }

    public function createData()
    {
        $genres = Genre::all();
        return view('clients.create', compact('genres'));
    }

    public function storeData(Request $request)
    {
        $validated = $request->validate([
            'genre_id' => 'required',
            'photo' => 'required|Image|max:5120',
            'title' => 'required|max:30',
            'description' => 'required|max:50',
            'publish_date' => 'required|date|before:today'
        ]);

        $movie = new Movie();
        $movie->genre_id = $request->genre_id;
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->publish_date = $request->publish_date;
        $movie->photo = $request->photo->store('image', 'public');
        $movie->save();
        // Movie::create($request->all());
        return view('clients.success')->with('message', 'Movie Berhasil Ditambahkan');
    }


    public function showData(Movie $Movie)
    {
        return view('clients.show', compact('movies'));
    }

    public function deleteData(Movie $movie){
        Storage::disk('public')->delete($movie->photo);
        $movie->delete();

        return view('clients.success')->with('message', 'Movie Berhasil Dihapus');
    }
}
