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


    // Edit Complain Form View
    public function editqueuecomplain($id)
    {
        $complaindetail = Complain::where('id' , $id)->first();

        return view('edit-complain', compact('complaindetail'));
    }


      // complain Update Request
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

        $complain    = Complain::find($id);

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

        return redirect()->route('complaints-queued')->with('message', __('site.complain_update'));
    }


    // Complain Detail View
    public function detail(Request $request ,$id)
    {
        $complaindetail = Complain::where('id' , $id)->first();

        return view('complain-detail', compact('complaindetail'));
    }


    // Complain Update Status to Process
    public function updatestatusprocess($id)
    {
         $complaindetail = Complain::where('id' , '=' , $id)->update(['status' => 'process']);

         return redirect()->route('complaints-queued')->with('message', __('site.complain_success_process'));
    }


    // Complain Update Status to Complete
    public function updatestatuscomplete($id)
    {
         $complaindetail = Complain::where('id' , '=' , $id)->update(['status' => 'complete']);

         return redirect()->route('complaints-processing')->with('message', __('site.complain_success_complete'));
    }


    // Complain Delete Request
    public function delete($id)
    {
         $complaindetail = Complain::where('id' , '=' , $id)->delete();

         return redirect()->route('complain-queued')->with('message', __('site.complain_deleted'));
    }


    // Queue Complains view
    public function queuecomplains()
    {
        $complain  = Complain::where('status' , 'queued')->get();

        return view('complaints-queued', compact('complain'));
    }

    public function processcomplains()
    {
        $complain = Complain::where('status' , 'process')->get();

        return view('complaints-processing', compact('complain'));
    }

    public function resolvedcomplains()
    {
        $complain = Complain::where('status' , 'complete')->get();

        return view('complaints-resolved', compact('complain'));
    }

}
