<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = Train::where('departure_time', '>=', '2022-09-28')->get();
        return view('train', compact('trains'));
    }
}
