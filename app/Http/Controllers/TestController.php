<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function create(Request $request)
    {
        if ($request->hasFile('picture')) {
            $extension = $request->picture->extension();
            $name = uniqid("img_").".".$extension;
            $request->picture->storeAs('images', $name, "sources");
        }
        return redirect()->to('/test');
    }
}
