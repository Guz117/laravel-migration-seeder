<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('arrivals_date', '2022-02-21')->get();
        $data = ['trains' => $trains];
        return view("home", $data);
    }
}
