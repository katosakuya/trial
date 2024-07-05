<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBCalController extends Controller
{
    public function index(Request $request){
        return view('dbcal.index', [
        ]);
    }
}
