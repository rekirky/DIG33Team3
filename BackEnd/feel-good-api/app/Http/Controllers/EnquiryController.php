<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Enquiry;
use App\Http\Resources\Enquiry as EnquiryResource;
use Illuminate\Support\Facades\Mail;

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
        //Creates a new enquiry object
        $enquiry = new Enquiry;

        //loads in the information sent via the request
        $enquiry->name = $request->input('name');
        $enquiry->email = $request->input('email');
        $enquiry->message = $request->input('message');

        Mail::send('emails.test', [], function ($message) use ($request) {
            $message
              ->from('info@endgame-feelgood.com', 'Feel Good Drink Co')
              ->to($request->input('email'), $request->input('name'))
              ->subject('From Feel Good Drink Co with ❤');
        });

        //Saves the Enquiry to the database
        $enquiry->save();

        if($enquiry->save()){
            return response(["Enquiry successfully added"],201);
        }

    }

}
