<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;


class InquiryController extends Controller
{

    public function inquiryform()
    {
        return view('add-inquiry');
    }

    public function store(Request $request)
    {
        $inquiry = new Inquiry;
        $inquiry->name      =   $request['name'];
        $inquiry->mobile    =   $request['mobile'];
        $inquiry->cnic      =   $request['cnic'];
        $inquiry->postal_address  =   $request['postal_address'];
        $inquiry->city  =   $request['city'];
        $inquiry->title  =   $request['title'];
        $inquiry->type  =   $request['type'];
        $inquiry->details  =   $request['details'];
        $inquiry->status    =   'queued';

        $inquiry->save();

        return redirect()->route('inquiries-queued')->with('message', __('site.inquiry_submit'));

    }

    public function queueinquiries()
    {
        $inquiry = Inquiry::where('status' , 'queued')->get();
        return view('inquiries-queued', compact('inquiry'));
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


