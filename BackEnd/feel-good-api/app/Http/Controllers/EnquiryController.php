<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Enquiry;
use App\Http\Resources\Enquiry as EnquiryResource;

class EnquiryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $enquiry = new Enquiry;

        $enquiry->name = $request->input('name');
        $enquiry->email = $request->input('email');
        $enquiry->message = $request->input('message');

        $enquiry->save();

        if($enquiry->save()){
            return response(["Enquiry successfully added"],201);
        }

    }

}
