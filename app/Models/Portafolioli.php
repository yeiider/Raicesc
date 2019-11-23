<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portafolioli extends Model
{
    protected $table="portafolio";

    protected $fillable=['titulo','subtitulo','imagen','cuerpo','imagen2','titulo2','subtitulo2','identificador'];
}
