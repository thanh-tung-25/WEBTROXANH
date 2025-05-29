<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restfulApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'RESTful API hoạt động!'
        ]);
    }
}
