<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Para no proteger nada ya que no tenemos contraseñas ni nada privado
    protected $guarded = [];
}
