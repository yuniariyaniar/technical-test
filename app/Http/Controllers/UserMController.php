<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;

class UserMController extends Controller
{
    public function index()
    {
        $dtuser = UserM::all();
        return view('user_access',compact('dtuser'));
    }

    
    public function create()
    {
        $hin = UserM::all();
        return view ('tambah_user',compact('hin'));
    }

    public function store(Request $request)
    {
         
       $request->validate([
               'username' => 'required',
               'email' => 'required',  
               'name' => 'required',
               'level' => 'required',
               'password' => 'required' 
        ]);

        $array = $request->only([
            'username','email','name','level','password'
        ]);

        $array['password'] = bcrypt($array['password']);
        
        $user = UserM::create($array);
        return redirect('user_access'); 

    }

     public function destroy($id)
    {
         $peg = UserM::findorfail($id);
         $peg->delete();
         return back()->with('info','dihapus');
    }
}
