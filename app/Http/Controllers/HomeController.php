<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GameController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
