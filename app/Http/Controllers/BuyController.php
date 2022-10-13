<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\customer;

class BuyController extends Controller
{
     public function index()
    {
        return view('buy');
    }

     public function save(Request $request)
    {
        $cust_name = $request -> nama;
        $cust_date = $request -> tgl;
        $cust_gender = $request -> gender;
        $cust_id = Helper::IDGenerator(new Customer,'custid',5,'STD');

        $q = new Customer;
        $q->custid = $cust_id;
        $q->nama = $cust_name;
        $q->tgl = $cust_date;
        $q->gender = $cust_gender;
        $q->save();

        return redirect('tiket');

    }

    

}
