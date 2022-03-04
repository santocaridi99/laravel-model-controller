<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //qui scriverò la funzione per recuperare tutti i film
    public function index(){
        // query select all
        $data = Movie::all();
        return view('home',compact("data"));
    }
}
