<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Hathaichanok Khwansong",
            "age" => 21,
        ];
            return view ("welcome" , $data);
    }
}
