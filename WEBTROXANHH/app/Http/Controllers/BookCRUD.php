<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCRUD extends Controller
{
    public function create()
    {
        return response()->json(['message' => 'Form tạo sách']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Đã lưu sách']);
    }

    public function edit($id)
    {
        return response()->json(['message' => "Chỉnh sửa sách có ID: $id"]);
    }

    public function update(Request $request, $id)
    {
        return response()->json(['message' => "Đã cập nhật sách có ID: $id"]);
    }

    public function destroy($id)
    {
        return response()->json(['message' => "Đã xoá sách có ID: $id"]);
    }
}
