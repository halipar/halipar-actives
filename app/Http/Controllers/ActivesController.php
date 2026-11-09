<?php

namespace App\Http\Controllers;

use App\Models\Active;
use App\Models\Sector;
use App\Models\TypeActive;
use Exception;
use Illuminate\Http\Request;

class ActivesController extends Controller
{
    public readonly Active $active;
    public readonly Sector $sector;
    public readonly TypeActive $typeActive;


    public function __construct()
    {
        $this->active = new Active();
        $this->sector = new Sector();
        $this->typeActive = new TypeActive();
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actives = $this->active->all();
        return view('actives/actives_list', ['actives' => $actives]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = $this->typeActive->all();
        $sectors = $this->sector->all();
        return view('actives/actives_create', ['types' => $types, 'sectors' => $sectors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->active->create([
                'type_active_id' => ($request->type_active_id),
                'sector_id' => ($request->sector_id),
                'code' => ($request->code),

            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Ativo cadastrado com sucesso!'
            ], 200);
        } catch (Exception $e) {
            //throw $th;
            return response()->json([
                'status' => 'connectionError',
                'logError' => $e->getMessage(),
                "code" => $e->getCode(),
                "message" => 'Erro de conecção.'
            ], 500);
        }
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
        $active = $this->active->findOrFail($id);
        $sectors = $this->sector->all();
        return view('actives/actives_edit', ['active' => $active, 'sectors' => $sectors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $updated = $this->active->where('id', $id)->update(['sector_id'=> $request->sector_id]);

            
            return response()->json([
                'status' => 'Sucesso',
                'message' => 'Ativo atualizado com sucesso!'
            ], 200);;
            
        } catch (Exception $te) {
            return response()->json([
                'status' => 'Erro',
                "message" => 'O ativo não foi editado.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->active->where('id', $id)->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Ativo deletado com sucesso!'
            ], 200);
        } catch (Exception $e) {
            //throw $th;
            return response()->json([
                'status' => 'Erro',
                "message" => 'O ativo não foi deletado.'
            ], 500);
        }
    }
}
