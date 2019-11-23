<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configure extends Model
{
    protected $table="config";
    protected $fillable = [
    'titulo_pagina',
    'color_titulo',
    'bg_color_nav',
    'color_primario'
    ];
}
