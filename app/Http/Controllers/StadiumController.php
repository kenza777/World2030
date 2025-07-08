<?php

namespace App\Http\Controllers;

use App\Models\Stadium;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    public function index()
    {
        // Fetch all stadiums from the database
        $stadiums = Stadium::all();

        // Pass stadiums to the 'index' view
        return view('index', compact('stadiums'));
    }
}
