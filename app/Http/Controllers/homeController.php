<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\report;
use App\Models\event;

class homeController extends Controller
{
    public function __invoke()
    {
        $events = event::orderBy('id', 'desc')->paginate(2);
        $reports = report::orderBy('id', 'desc')->paginate(3);

        return view('home', compact('reports'), compact('events'));
    }
}
