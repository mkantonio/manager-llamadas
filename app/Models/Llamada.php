<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Llamada extends Model
{
    use HasFactory;

    protected $table = 'llamada';
    protected $fillable = [
        'telefono_id',
        'eess_id',
        'operador_id',
        'estado_id',
        'categoria_id',
        'descripcion',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function operador(): BelongsTo
    {
        return $this->belongsTo(Operador::class);
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }

    public function eess(): BelongsTo
    {
        return $this->belongsTo(Eess::class);
    }

    public function telefono(): BelongsTo
    {
        return $this->belongsTo(Telefono::class);
    }
}
