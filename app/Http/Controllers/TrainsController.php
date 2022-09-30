<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $trains = Train::whereDate('date', '=', '2022-09-30')->get();
        return view('train', compact('trains'));
    }
}
