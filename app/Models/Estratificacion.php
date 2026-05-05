<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estratificacion extends Model
{
    use HasFactory;

    protected $table = 'estratificaciones';

    protected $fillable = [
        'ficha_catastral',
        'ficha_nacional',
        'matricula_inmobiliaria',
        'propietario',
        'identificacion',
        'direccion_predio',
        'hectareas',
        'area_construida',
        'destino_economico',
        'estrato',
        'avaluo',
    ];

    protected $casts = [
        'hectareas' => 'decimal:4',
        'area_construida' => 'decimal:2',
        'avaluo' => 'decimal:2',
    ];

    // Scope para búsqueda por ficha catastral
    public function scopePorFichaCatastral($query, $ficha)
    {
        return $query->where('ficha_catastral', $ficha);
    }

    // Scope para búsqueda por identificación del propietario
    public function scopePorIdentificacion($query, $identificacion)
    {
        return $query->where('identificacion', $identificacion);
    }

    // Scope para búsqueda por matrícula inmobiliaria
    public function scopePorMatricula($query, $matricula)
    {
        return $query->where('matricula_inmobiliaria', $matricula);
    }
}
