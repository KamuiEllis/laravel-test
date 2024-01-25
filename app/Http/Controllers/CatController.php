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

    public function getCat(Cat $cat) {
        return view("cat", ['cat' => $cat]);
    }

    public function deleteCat(Cat $cat) {
        $cat->delete();
        return redirect('/')->with('success', 'Cat has been deleted!');
    }

    public function editCat(Cat $cat, Request $request) {
        $inputs = $request->validate([
            'name' => ['required'],
            'breed' => ['required'],
            'description' => ['required'],
            'age' => ['required'],
            'location' => ['required'],
        ]);

        $cat->update($inputs);
        return redirect("/cat/".$cat->id)->with('success', 'Cat information has been edited!');
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
