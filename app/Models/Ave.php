<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    protected $fillable=['NombreComun','NombreCientifico','Especie','Familia'];
    public $table ='ave';

    use HasFactory;
}
