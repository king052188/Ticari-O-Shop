<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Helper extends Controller
{
    //

    public static $cookie_life_default = 3600 / 2;
    public static $cookie_life_forever = 2000000000;

    public static function getCookies($cookies_name)
    {
        $data = \Cookie::get($cookies_name);

        if($data == null) {
            return null;
        }

        if(count($data) == 0) {
            return null;
        }

        return $data;
    }

    public static function get_local($country, $category, $item) {
        $local = array(
            "Currency" => [
                [
                    "Country" => "America",
                    "Type" => "USD",
                    "Url" => "/us/{$category}/{$item}"
                ],
                [
                    "Country" => "Philippines",
                    "Type" => "PHP",
                    "Url" => "/ph/{$category}/{$item}",
                ]
            ]
        );

        if($country == "ph" || $country == "PH") {
            $local = array(
                "Currency" => [
                    [
                        "Country" => "Philippines",
                        "Type" => "PHP",
                        "Url" => "/ph/{$category}/{$item}",
                    ],
                    [
                        "Country" => "America",
                        "Type" => "USD",
                        "Url" => "/us/{$category}/{$item}"
                    ]
                ]
            );
        }

        return $local;
    }

    public static function get_hex() {
        $random_hex = dechex(rand(0,255*255*255));

        return $random_hex;
    }
}
