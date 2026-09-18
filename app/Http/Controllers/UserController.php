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
            'name'=>($request->name),
            'sector'=>($request->sector),
            'description'=>($request->description)
        ]);
        
        return redirect()->back()->with('success','');
    }
}
