<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nume',
        'prenume',
        'email',
        'telefon',
        'data',
        'ora',
        'numar_persoane',
    ];
}
