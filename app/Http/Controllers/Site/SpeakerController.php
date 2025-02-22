<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['speakers'] = Speaker::get();
        return view('site.speaker.list.index', $response);
    }

    public function show($name)
    {
        $response['speaker'] = Speaker::where('name', urldecode($name))->first();

        return view('site.speaker.details.index', $response);
    }
}
