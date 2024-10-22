<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    protected $table = 'tramites'; // Nombre de la tabla
    protected $primaryKey = 'codigo'; // Llave primaria
    protected $fillable = [
        'id_visitante',
        'id_visita',
        'id_usuario',
        'descripcion',
        'estado',
        'fecha_inicio',
        'fecha_fin'
    ]; // Campos para asignación masiva

    // Relación con la tabla Visitantes
    public function visitante()
    {
        return $this->belongsTo(Visitante::class, 'id_visitante', 'codigo');
    }

    // Relación con la tabla Visitas
    public function visita()
    {
        return $this->belongsTo(Visita::class, 'id_visita', 'codigo');
    }

    // Relación con la tabla Usuarios
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'codigo');
    }
}
