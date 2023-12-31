<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
// use App\Models\Telefono;


class Eess extends Model
{
    use HasFactory;

    protected $table = 'eess';
    protected $fillable = [
        'nombre',
    ];

    public function telefonos(): hasMany
    {
        return $this->hasMany(Telefono::class);
    }

    public function llamadas(): hasMany
    {
        return $this->hasMany(Llamada::class);
    }
}
