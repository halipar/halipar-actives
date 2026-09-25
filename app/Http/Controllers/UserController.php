<?php

namespace App\Http\Controllers;

use App\Models\Actives;
use Exception;
use Illuminate\Database\QueryException as QueryException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function regis(Request $request)
    {

        try {

            Actives::create([
                'name' => ($request->name),
                'sector' => ($request->sector),
                'description' => ($request->description)
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

        //esse 200 é um codigo de status que representa ok / sucesso, mas ja é declarado por padrão no laravel caso de certo que o status seja 200, então mesmo se tirar esse codigo daí, será possivel realizar cadastros. Só deixei ai porque vi que é uma boa prática
    }
}
