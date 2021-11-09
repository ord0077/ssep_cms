<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CallController extends Controller
{

    public function missedcalls()
    {
        return view('missed-calls');
    }

    public function recievedcalls()
    {
        return view('received-calls');
    }

}


