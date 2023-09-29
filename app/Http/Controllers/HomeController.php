<?php

namespace App\Http\Controllers;

use App\Models\AddGames;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('app.home');
    }

    public function read(Request $request){
        $addGames = AddGames::paginate(8);
        
        return view('app.home', ['addgames' => $addGames]);
    }
}
