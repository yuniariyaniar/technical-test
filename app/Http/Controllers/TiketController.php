<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;


class TiketController extends Controller
{
     public function index()
    {
        $dttiket= customer::all(); 
        return view('tiket', compact('dttiket'));
        
    }
}
