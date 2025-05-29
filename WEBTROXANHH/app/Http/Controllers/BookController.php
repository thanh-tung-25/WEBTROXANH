<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Danh sách sách sẽ hiển thị ở đây'
        ]);
    }
}
