<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $train = Train::where('Departures_time', '16:10:00')->get();
        dd($train);
        return view("home", $train);
    }
}
