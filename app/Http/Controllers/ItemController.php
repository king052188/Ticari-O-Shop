<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function show_item($country, $category, $item) {

        $local = Helper::get_local($country, $category, $item);

        return view('pages.show_item', compact('local'));
    }


}
