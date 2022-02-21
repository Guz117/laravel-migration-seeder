<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // $trains = Train::where('arrivals_date', '>=', Carbon::today())->get();
        $trains = Train::paginate(10);
        $data = ['trains' => $trains];
        return view("home", $data);
    }

    public function show(Train $train) //findOrFail
    {
        return view('show', compact('train'));
    }
}
