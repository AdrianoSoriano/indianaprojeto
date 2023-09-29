<?php

namespace App\Http\Controllers;

use App\Models\AddGames;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }

    public function read(Request $request){
        $addGames = AddGames::paginate(8);
        
        return view('site.principal', ['addgames' => $addGames]);
    }
}
