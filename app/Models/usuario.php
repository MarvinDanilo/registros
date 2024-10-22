<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'usuarios';

    // Llave primaria de la tabla
    protected $primaryKey = 'codigo'; // Verificado, esto es correcto

    // Campos permitidos para asignación masiva
    protected $fillable = ['Nombre', 'contrasena', 'rol', 'fecha_registro'];
}






