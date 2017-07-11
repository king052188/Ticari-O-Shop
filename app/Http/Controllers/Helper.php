<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helper extends Controller
{
    //

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

    public static function get_to_usd($amount) {
        
    }
}
