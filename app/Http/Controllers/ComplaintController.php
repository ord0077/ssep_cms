<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ComplaintController extends Controller
{

    public function complaintform()
    {
        return view('add-complain');
    }

    public function queuecomplains()
    {
        return view('complaints-queued');
    }

}


