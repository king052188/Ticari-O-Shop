<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function contact() {

        $local = Helper::get_local(null, null, null);

       

        return view('pages.contact', compact('local'));

    }
}
