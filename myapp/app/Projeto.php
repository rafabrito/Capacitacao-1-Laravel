<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome_projeto', 'data_inicio', 'data_fim'];
}
