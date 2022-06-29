<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
        protected $table = 'vagas';
        protected $fillable = [
            'idempresa',
            'nome',
            'descricao',
            'salario',
         ];
}
