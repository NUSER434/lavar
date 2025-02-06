<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Section;

class HomeController extends Controller
{
    public function index ()
    {
        $reports = Report::where('status', 'approvver')->with('section')->get();
        return view('home.index', compact('reports'));
    }
}
