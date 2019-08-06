<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use App\Http\Resources\Event as EventResource;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Gets all events from the database
        $events = Event::all();

        //Returns all the events in the database
        return EventResource::collection($events);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //Attempts to find the event requested by id
        $event = Event::findOrFail($id);

        //returns the event that was requested
        return new EventResource($event);
    }
}
