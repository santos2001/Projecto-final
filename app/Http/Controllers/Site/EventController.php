<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['events'] = Event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(6);
        return view('site.event.all.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        try {
            $response['events'] = Event::where([['state', 'Autorizada'], ['title', urldecode($title)]])->first();
            $response['lasted'] = Event::where([['state', 'Autorizada'], ['title', '!=', urldecode($title)]])->orderBy('id', 'desc')->limit(6)->get();
            return view('site.event.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.event');
        }
    }
}
