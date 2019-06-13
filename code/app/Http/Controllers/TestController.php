<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function test()
    {
        $products = [
            'name' => 'PC',
            'price' => '2000'
        ];
        return response()->json($products);
    }
}
