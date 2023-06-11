<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MovieController extends Controller
{
    public function index(){
        $title= 'Page movie';
        $movie= Movies::All();
       // var_dump($movie);
   return view('pages.movie', compact('movie','title'));
   }
}