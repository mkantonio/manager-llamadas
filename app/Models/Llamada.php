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
}
