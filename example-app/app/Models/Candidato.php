<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $table = 'candidaturas';
    protected $fillable = [
   'nome',
   'email',
   'linkeding',
    'gituhub',
];

protected $dates = [
    'deleted_at',
];

public function vagas(){
    return this->hasMany(related:Vaga::class);
}
}
