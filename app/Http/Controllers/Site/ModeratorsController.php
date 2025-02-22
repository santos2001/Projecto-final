<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Moderators;
use Illuminate\Http\Request;

class ModeratorsController extends Controller
{
    //


    public function index()
    {
        $response['moderators'] = Moderators::orderBy('id', 'desc')->get();
        return view('site.moderators.list.index', $response);
    }


}
