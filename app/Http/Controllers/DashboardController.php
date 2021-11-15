<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\models\Inquiry;

use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index()
    {
        // Inquiries
        $queueinquiries  = Inquiry::where('status' , 'queued')->get();
        $queuedinquiries  = Inquiry::where('status' , 'queued')->limit(10)->get();
        $processinquiries  = Inquiry::where('status' , 'process')->get();
        $resolvedinquiries  = Inquiry::where('status' , 'complete')->get();


        // Complains
        $queuecomplains  = Complain::where('status' , 'queued')->get();
        $queuedcomplains  = Complain::where('status' , 'queued')->limit(10)->get();
        $processcomplains  = Complain::where('status' , 'process')->get();
        $resolvedcomplains  = Complain::where('status' , 'complete')->get();
        return view('dashboard' , compact('queueinquiries',
        'processinquiries',
        'resolvedinquiries',
        'queuedinquiries',
        'queuecomplains',
        'queuedcomplains',
        'processcomplains',
        'resolvedcomplains'));
    }

}


