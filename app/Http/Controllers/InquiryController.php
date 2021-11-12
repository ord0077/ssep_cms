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

    public function editqueueinquiry($id)
    {
        $inquirydetail = Inquiry::where('id' , $id)->first();
        return view('edit-inquiry', compact('inquirydetail'));
    }


    public function detail(Request $request ,$id)
    {
        $inquirydetail = Inquiry::where('id' , $id)->first();

        return view('inquiry-detail', compact('inquirydetail'));
    }

    public function updatestatusprocess($id)
    {
        $inquirydetail = inquiry::where('id' , '=' , $id)->update(['status' => 'process']);

        return redirect()->route('inquiries-queued')->with('message', __('site.success_move_to_process'));
    }

    public function updatestatuscomplete($id)
    {
        $inquirydetail = inquiry::where('id' , '=' , $id)->update(['status' => 'complete']);

        return redirect()->route('inquiries-processing')->with('message', __('site.success_move_to_complete'));
    }

    public function delete($id)
    {
        $inquirydetail = inquiry::where('id' , '=' , $id)->delete();

        return redirect()->route('inquiries-queued')->with('message', __('site.inquiry_deleted'));
    }

    public function queueinquiries()
    {
        $inquiry = Inquiry::where('status' , 'queued')->get();

        return view('inquiries-queued', compact('inquiry'));
    }

    public function processinquiries()
    {
        $inquiry = Inquiry::where('status' , 'process')->get();

        return view('inquiries-processing', compact('inquiry'));
    }

    public function completedinquiries()
    {
        $inquiry = Inquiry::where('status' , 'complete')->get();

        return view('inquiries-completed', compact('inquiry'));
    }

}


