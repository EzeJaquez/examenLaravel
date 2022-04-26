<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casal extends Model
{
    protected $fillable = [
        'nom',
        'id_ciutat',
        'data_inici',
        'data_final',
        'n_places',
    ];

    function ciutat(){
        return $this->belongsTo('App\Ciutat');
    } 
    
    use HasFactory;
}