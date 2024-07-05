<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Character;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('home');
    }

    public function create(){
        $attributes = Attribute::all();
        $categories = Category::all();
        return view('create',compact('attributes','categories'));
    }
    public function store(Request $request)
    {
        try {
            $character = new Character();
            $character->name = $request->name;
            $character->english_name = $request->english_name;
            $character->attributes_id = $request->attributes_id;
            $character->categories_id = json_encode($request->categories_id);
            $character->ls1_categories_id = $request->ls1_categories_id;
            $character->ls1_multiplier = $request->ls1_multiplier;
            $character->ls2_categories_id = $request->ls2_categories_id;
            $character->ls2_multiplier = $request->ls2_multiplier;
            $character->ls3_categories_id = $request->ls3_categories_id;
            $character->ls3_multiplier = $request->ls3_multiplier;
            $character->ls_attributes_id = $request->ls_attributes_id;
            $character->ls_attributes_multiplier = $request->ls_attributes_multiplier;
            $character->ls1_200 = $request->ls1_200;
            $character->ls2_200 = $request->ls2_200;
            $character->ls3_200 = $request->ls3_200;
            $character->save();
            return redirect()->route('home')->with('success', 'キャラクターが追加されました');
        }  catch (\Exception $e) {
            dd('Error: ' . $e->getMessage());
        }
    }
}
