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
        $this->validate(request(),[
            'name'  => 'required',
            'mobile'  => 'required',
            'cnic'  => 'required',
            'postal_address'  => 'required',
            'city'  => 'required',
            'title'  => 'required',
            'type'  => 'required',
            'details'  => 'required',
            ]);

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

    public function detail(Request $request ,$id)
    {
        $inquirydetail = Inquiry::where('id' , $id)->first();
        
        return view('inquiry-detail', compact('inquirydetail'));
    }

    public function updatestatus($id)
    {
        $inquirydetail = inquiry::where('id' , '=' , $id)->update(['status' => 'process']);

        return redirect()->route('inquiries-queued')->with('message', __('site.success_move_to_process'));
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


