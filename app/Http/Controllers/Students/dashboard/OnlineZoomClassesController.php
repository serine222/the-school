<?php

namespace App\Http\Controllers\students\dashboard;

use App\Http\Controllers\Controller;

use App\Http\Traits\MeetingZoomTrait;
use App\Models\Grade;
use App\Models\online_classe;
use Illuminate\Http\Request;

class OnlineZoomClassesController extends Controller
{

    public function index()
    {
        $online_classes = online_classe::where('section_id',auth()->user()->section_id)->get();
        return view('pages.students.dashboard.online_classes.index', compact('online_classes'));
    }



    }
