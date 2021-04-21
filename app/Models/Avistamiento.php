<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avistamiento extends Model
{
    protected $fillable=['ubicacion-latitud','ubicacion-longitud'];

    protected $primaryKey='id';
    public $table ='avistamiento';
    use HasFactory;
}
