<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'id_cargo'];
}
