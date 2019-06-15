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

    public function get(Request $request)
    {
        $page = empty($request->input('page')) ? 1 : $request->input('page');
        $response = [
            'type' => 'get',
            'page' => $page
        ];
        return response()->json($response);
    }

    public function getDetail($id)
    {
        $response = [
            'type' => 'getDetail',
            'id' => $id
        ];
        return response()->json($response);
    }

    public function post(Request $request)
    {
        if ($request->input('fail') == 'true'){
            return response()->json(['error' => 'test fail'], 422);
        }
        $response = [
            'data' => $request->all(),
        ];
        return response()->json($response, 201);
    }
}
