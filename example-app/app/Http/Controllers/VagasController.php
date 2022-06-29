<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vaga;
use Log;

class VagasController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();

        if (view()->exists('vaga.listagem')) {
            $vagas = Vaga::all();
            Log::info(
                DB::getQueryLog()
            );
            return view('vaga.listagem',
            ['vagas' => $vagas]);
        } else {
            return 'Página não encontrada.';
        }

    }
    public function inclusao(){
        return view('vaga.inclusao');
    }
    public function incluir(Request $request){
        Vaga::inclusao([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'salario'=>$request->salario,
        ]);
        return back();
    }
}
