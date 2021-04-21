<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornitologo extends Model
{
    public $table ='ornitologo';

    protected $fillable=['Nombre','Apellido','DNI','Telefono'];

    protected $primaryKey='id';

    use HasFactory;
}
