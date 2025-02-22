<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Schedule;

class ScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* programs & activities */
        $response['schedules'] = Schedule::orderBy('id', 'ASC')->get();
        return view('site.schedule.index', $response);
    }


}
