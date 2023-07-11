<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Estado extends Model
{
    use HasFactory;
    protected $table = 'estado';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function llamadas(): hasMany
    {
        return $this->hasMany(Llamada::class);
    }
}
