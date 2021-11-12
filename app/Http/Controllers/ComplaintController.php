<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;


class ComplaintController extends Controller
{
    // Complain Form View
    public function complaintform()
    {
        return view('add-complain');
    }


    // Complaint Save Request
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

        $complain = new Complain();
        $complain->name      =   $request['name'];
        $complain->mobile    =   $request['mobile'];
        $complain->cnic      =   $request['cnic'];
        $complain->postal_address  =   $request['postal_address'];
        $complain->city  =   $request['city'];
        $complain->title  =   $request['title'];
        $complain->type  =   $request['type'];
        $complain->details  =   $request['details'];
        $complain->status    =   'queued';

        $complain->save();

        return redirect()->route('complaints-queued')->with('message', __('site.complain_submit'));

    }

    public function queuecomplains()
    {
        return view('complaints-queued');
    }

    public function processcomplains()
    {
        return view('complaints-processing');
    }

    public function resolvedcomplains()
    {
        return view('complaints-resolved');
    }

}


