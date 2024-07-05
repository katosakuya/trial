<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class TierController extends Controller
{
    public function index(Request $request){
        $tier = Character::all();
        return view('tier', compact('tier'));
    }
}
