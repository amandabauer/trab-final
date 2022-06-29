<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable=[
        'nome',
        'cidade',
        'area_atuacao',
        'num_func'
    ];
protected $dates = [
   'deleted_at',
];

public function vagas(){
    return this->hasMany(related:Vaga::class);
}
}
