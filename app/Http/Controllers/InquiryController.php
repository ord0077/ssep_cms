<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class InquiryController extends Controller
{

    public function inquiryform()
    {
        return view('add-inquiry');
    }

    public function queueinquiries()
    {
        return view('inquiries-queued');
    }

    public function processinquiries()
    {
        return view('inquiries-processing');
    }

    public function completedinquiries()
    {
        return view('inquiries-completed');
    }

}


