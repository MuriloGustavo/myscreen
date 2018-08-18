<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;

class AdminController extends Controller
{
	private $movie;

    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function index()
    {
    	$movies = $this->movie->paginate();

        $genres = ['acao', 'animacao', 'aventura', 'comedia', 'drama', 'fantasia', 'ficcao', 'romance', 'suspense', 'terror'];

        return view('admin.home.index', compact('movies','genres'));
    }

    public function movie($id)
    {
    	//Recuperando o filme
        $movie = $this->movie->find($id);

        $title = "{$movie->title}";

    	return view('admin.home.movie', compact('movie', 'title'));
    }
}
