<?php

namespace App\Http\Controllers;

use App\Models\Actives;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }

    public function regis(Request $request){

        Actives::create([
            'code'=>($request->code),
            'description'=>($request->description)
        ]);
        
        return redirect()->back()->with('success','');
    }
}
