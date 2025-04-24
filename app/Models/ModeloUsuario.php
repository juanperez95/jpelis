<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModeloUsuario extends Model
{
    //
    public $timestamps = true;
    protected $table = 'usuarios';
    protected $fillable = ['nombre','apellido','telefono','correo','clave','documento','fecha_nacimiento'];

    // Llave primaria
    protected $primaryKey = 'id';

    // Esconder la clave del usuario
    protected $hidden = ['password'];
}
