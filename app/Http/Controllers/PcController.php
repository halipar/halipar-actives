<?php

namespace App\Http\Controllers;

use App\Models\Pc;
use Illuminate\Http\Request;

class PcController extends Controller
{
    
    public readonly Pc $pc;

    public function __construct(){
        $this->pc = new Pc();
    }


    public function index()
    {
        $pcs = $this->pc->all();
        return view('sys-catalogue/sys_home', ['pcs' => $pcs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
