<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class GenController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function generate(Request $request)
    {
        $pass = $request->password;
        $hash = Hash::make($pass);
        return view("pw",["data" => $hash]);
    }
}
