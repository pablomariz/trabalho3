<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function classificacao(){
        return $this->hasMany(Classificacao::class, 'classificacao_id');
    }

    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
}
