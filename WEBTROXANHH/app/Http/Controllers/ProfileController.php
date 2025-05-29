<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        return response()->json(['profile' => 'Thông tin người dùng']);
    }
}
