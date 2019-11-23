<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table="historia";
    protected $fillable =['titulo','contedino','imagen'];
}
