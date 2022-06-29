<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;
use Log;

class EmpresasController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();

        if (view()->exists('empresa.listagem')) {
            $empresas = Empresa::all();
            return view('empresa.listagem',
            ['empresas' => $empresas]);
        } else {
            return 'Página não encontrada.';
        }
    }
        public function inclusao(){
            return view('empresa.inclusao');
        }
        public function incluir(Request $request){
            Empresa::inclusao([
                'nome'=>$request->nome,
                'cidade'=>$request->cidade,
                'area_atuacao'=>$request->area_atuacao,
                'num_func'=>$request->num_func,
            ]);
            return back();
        }

}
