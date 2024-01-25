<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    //
    public function getCats() {
        $cats= Cat::orderBy("id", 'desc')->get();
        return view("cats", ['cats' => $cats]);
    }

    public function postCat(Request $request) {
        $inputs = $request->validate([
            'name' => ['required'],
            'breed' => ['required'],
            'description' => ['required'],
            'age' => ['required'],
            'location' => ['required'],
        ]);

        $cat = Cat::create($inputs);

        $cat->save();

        return redirect('/addCat')->with('success', 'Cat has been added');

    }
}
