<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CustomerController extends Controller
{

    // Authentication form view
    public function index()
    {
        return view('customers');
    }

}


