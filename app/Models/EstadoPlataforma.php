<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPlataforma extends Model
{
    use HasFactory;
    protected $fillable = [
        'estado','plataforma_id',
        'cliente_id'
    ];
}
