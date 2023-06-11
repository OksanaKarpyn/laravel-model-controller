<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index(){
    $title= 'Page About';
    return view('pages.about', compact('title'));
  }
}