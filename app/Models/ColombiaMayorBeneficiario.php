<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColombiaMayorBeneficiario extends Model
{
    use HasFactory;

    protected $table = 'colombia_mayor_beneficiarios';

    protected $fillable = [
        'numero_documento',
        'nombre',
        'apellido',
        'estado',
    ];

    // Accessor para nombre completo
    public function getNombreCompletoAttribute(): string
    {
        return "{$this->nombre} {$this->apellido}";
    }

    // Scope para búsqueda por documento
    public function scopePorDocumento($query, $documento)
    {
        return $query->where('numero_documento', $documento);
    }

    // Scope para filtrar por estado
    public function scopeActivos($query)
    {
        return $query->where('estado', 'Activo');
    }
}