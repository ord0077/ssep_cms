<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;


class InquiryController extends Controller
{
    // Inquiry Form View
    public function inquiryform()
    {
        return view('add-inquiry');
    }


    // Inquiry Save Request
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


    // Edit Inquiry Form View
    public function editqueueinquiry($id)
    {
        $inquirydetail = Inquiry::where('id' , $id)->first();
        return view('edit-inquiry', compact('inquirydetail'));
    }


    // Inquiry Update Request
    public function update(Request $request ,$id)
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

        $inquiry    = Inquiry::find($id);

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

        return redirect()->route('inquiries-queued')->with('message', __('site.inquiry_update'));
    }


    // Inquiry Detail View
    public function detail(Request $request ,$id)
    {
        $inquirydetail = Inquiry::where('id' , $id)->first();

        return view('inquiry-detail', compact('inquirydetail'));
    }


    // Inquiry Update Status to Process
    public function updatestatusprocess($id)
    {
        $inquirydetail = Inquiry::where('id' , '=' , $id)->update(['status' => 'process']);

        return redirect()->route('inquiries-queued')->with('message', __('site.success_move_to_process'));
    }


    // Inquiry Update Status to Complete
    public function updatestatuscomplete($id)
    {
        $inquirydetail = Inquiry::where('id' , '=' , $id)->update(['status' => 'complete']);

        return redirect()->route('inquiries-processing')->with('message', __('site.success_move_to_complete'));
    }


    // Inquiry Delete Request
    public function delete($id)
    {
        $inquirydetail = Inquiry::where('id' , '=' , $id)->delete();

        return redirect()->route('inquiries-queued')->with('message', __('site.inquiry_deleted'));
    }


    // Queue Inquiries view
    public function queueinquiries()
    {
        $inquiry = Inquiry::where('status' , 'queued')->get();

        return view('inquiries-queued', compact('inquiry'));
    }


    // Process Inquiries view
    public function processinquiries()
    {
        $inquiry = Inquiry::where('status' , 'process')->get();

        return view('inquiries-processing', compact('inquiry'));
    }


    // Resolved Inquiries view
    public function completedinquiries()
    {
        $inquiry = Inquiry::where('status' , 'complete')->get();

        return view('inquiries-completed', compact('inquiry'));
    }

}


