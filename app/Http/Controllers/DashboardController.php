<?php

namespace App\Http\Controllers;
use App\models\Inquiry;

use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index()
    {
        $queueinquiries  = Inquiry::where('status' , 'queued')->get();
        $queuedinquiries  = Inquiry::where('status' , 'queued')->limit(10)->get();
        $processinquiries  = Inquiry::where('status' , 'process')->get();
        $resolvedinquiries  = Inquiry::where('status' , 'complete')->get();
        return view('dashboard' , compact('queueinquiries', 'processinquiries', 'resolvedinquiries', 'queuedinquiries'));
    }

}


