<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
    public function create()
    {
        return view('forms.create');
    }
    public function show($form)
    {
        return view('forms.show', compact('form'));
    }
}
