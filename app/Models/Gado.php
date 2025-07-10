<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gado extends Model
{
    protected $table = 'gados';

    protected $fillable = [
        'codigo',
        'leite',
        'racao',
        'peso',
        'data_nascimento',
    ];
}
