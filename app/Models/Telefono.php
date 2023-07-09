<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Telefono extends Model
{
    use HasFactory;

    protected $table = 'telefono';
    protected $fillable = [
        'telefono',
        'eess_id'
    ];

    public function eess(): belongsTo
    {
        return $this->belongsTo(Eess::class);
    }
}
