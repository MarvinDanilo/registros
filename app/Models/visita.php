<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    protected $table = 'visitas'; // Nombre de la tabla
    protected $primaryKey = 'codigo'; // Llave primaria
    protected $fillable = ['id_visitante', 'id_usuario', 'proposito', 'fecha_visita', 'hora_entrada', 'hora_salida']; // Campos para asignación masiva
    
    public function visitante()
    {
        return $this->belongsTo(Visitante::class, 'id_visitante', 'codigo');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'codigo'); // Asegúrate de que 'codigo' sea la clave primaria en la tabla usuarios
    }
}
