<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Moderators;
use App\Models\Schedule;
use App\Models\Speaker;
use App\Models\Event;

class SiteController extends Controller
{
    public function index()
    {
        $response['site'] = 'Home';


        /* programs & activities */
        $response['schedules'] = Schedule::orderBy('id', 'ASC')->get();


        $response['speakers'] = Speaker::where('id', '!=', '255')->get();
        $response['moderators'] = Moderators::where('id', '!=', '255')->get();

        $response['events'] = Event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(6)->get();

        $response['solemnOpening'] = Speaker::find(255);
        return view('site.home.index', $response);
    }
}
