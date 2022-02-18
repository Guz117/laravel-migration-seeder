<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $train = Train::where('Departur_time', '2022-02-18 14:40:00')->get();
        dd($train);
        return view("home", $train);
    }
}
