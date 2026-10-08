<?php

namespace App\Http\Controllers;

use App\Models\Actives;
use App\Models\Sector;
use App\Models\TypeActive;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ActivesController extends Controller
{


    public function index(){
        $types = TypeActive::all();
        

        return view(compact('types') );
    }

    public function create(){

        $types = TypeActive::all();    
        $sectors = Sector::all();
        return view('create', compact('types', 'sectors'));
    }

    public function store(Request $request){

    // dd($request->all());

        try {

            Actives::create([
                'sector_id' => ($request->sector_id),
                'type_active_id' => ($request->type_active_id),
                'code' => ($request->code),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Ativo cadastrado com sucesso!'
            ], 200);
            

        } catch (QueryException $e) {
            //throw $th;
            return response()->json([
                'status' => 'dbError',
                'logError' => $e->getMessage(),
                "code"=>$e->getCode(),
                "message" => 'Você passou do limite de caracteres na descrição (max 250)'
            ], 500);

        } catch (Exception $e) {
            //throw $th;
            //throw $th;
            return response()->json([
                'status' => 'connectionError',
                'logError' => $e->getMessage(),
                "code"=>$e->getCode(),
                "message" => 'Erro de conecção.'
            ], 500);

        }
    }

}
