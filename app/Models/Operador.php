<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Operador extends Model
{
    use HasFactory;

    protected $table = 'operador';
    protected $fillable = [
        'nombre',
        'codigoOperador'
    ];

    public function llamadas(): hasMany
    {
        return $this->hasMany(Llamada::class);
    }


}
