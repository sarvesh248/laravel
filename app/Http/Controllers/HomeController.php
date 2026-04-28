<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
    return view('home');
}

public function submit(Request $request) {
    $name = $request->name;
    return view('home', compact('name'));
}
}
