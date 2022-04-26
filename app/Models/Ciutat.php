<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    protected $fillable = [
        'nombre',
        'n_habitants',
    ];

    use HasFactory;
}