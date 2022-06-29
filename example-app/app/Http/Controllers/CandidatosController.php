<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Candidato;
use Log;

class CandidatosController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();

        if (view()->exists('candidato.listagem')) {
            $candidatos = Candidato::all();
            return view('candidato.listagem',
            ['candidatos' => $candidatos]);
        } else {
            return 'Página não encontrada.';
        }

    }
    public function inclusao(){
        return view('candidato.inclusao');
    }
    public function incluir(Request $request){
        Candidato::inclusao([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'linkeding'=>$request->linkeding,
            'github'=>$request->github,
        ]);
        return back();
    }
}
