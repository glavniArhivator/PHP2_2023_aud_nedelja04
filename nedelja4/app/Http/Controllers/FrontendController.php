<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker;
class FrontendController extends Controller
{
    public function index() {
        $faker = Faker\Factory::create();

        $prod = [];

        for($i = 0; $i < 100; $i++) {
            $p = new \stdClass();

            $p->image = $faker->imageUrl($width = 640, $height = 480);
            $p->name = $faker->name();
            $p->description = $faker->text();
            $p->price = round($faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 10000), 2);
            $prod[] = $p;
        }

        //$title = '<script> window.location.href = "http://youtube.com" </script>';

        $title = '<script>console.log("XSS")</script>';

        return view("frontend.home", [
            "products" => [],
            "title" => $title
        ]);
    }
    public  function cart() {
       return view("frontend.cart");
    }
}
