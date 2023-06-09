<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class MovieController extends Controller
{
    public function index(){
       
        $movie= Movies::All();
       // var_dump($movie);
   return view('pages.home', compact('movie'));
   }
}