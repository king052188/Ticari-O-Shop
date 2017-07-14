<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function validate_item($hex_code) {

        return redirect('/ph/computer/dell-i7-2.66GHz')
            ->withCookie(\Cookie::make('Item-Country', 'ph', Helper::$cookie_life_default))
            ->withCookie(\Cookie::make('Item-Category', 'computer', Helper::$cookie_life_default))
            ->withCookie(\Cookie::make('Item-Name', 'dell-i7-2.66GHz', Helper::$cookie_life_default));
    }

    public function show_item($country, $category, $item) {

        $country_co = Helper::getCookies("Item-Country");
        $category_co = Helper::getCookies("Item-Category");
        $item_co = Helper::getCookies("Item-Name");

        if($country_co != $country) {
            return redirect("/{$country}/{$category}/{$item}")
                ->withCookie(\Cookie::make('Item-Country', $country, Helper::$cookie_life_default))
                ->withCookie(\Cookie::make('Item-Category', $category, Helper::$cookie_life_default))
                ->withCookie(\Cookie::make('Item-Name', $item, Helper::$cookie_life_default));
        }
        else {
            $country = $country_co;
            $category = $category_co;
            $item = $item_co;
        }
        
        $local = Helper::get_local($country, $category, $item);

        return view('pages.show_item', compact('local'));
    }


}
