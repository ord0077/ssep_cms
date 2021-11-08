<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{

    // Authentication form view
    public function index()
    {
        return view('dashboard');
    }

}


