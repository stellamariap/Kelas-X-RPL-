<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', function (Request $request) {
    if ($request->email == "admin@gmail.com" && $request->password == "1234") {
        return response()->json([
            "message" => "Login berhasil"
        ]);
    } else {
        return response()->json([
            "message" => "Login gagal"
        ], 401);
    }
});