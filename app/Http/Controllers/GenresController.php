<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenresController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index')->with(['genres'=>$genres]);
    }

    public function add()
    {
        return view('genres/add');
    }

    public function save()
    {
        dd($_POST);
    }

}
