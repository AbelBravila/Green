<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ROLE extends Model
{
        protected $primaryKey = 'id_role';
    
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'role';

    // Indicar que usaremos los timestamps automáticamente
    public $timestamps = true;

    // Define las columnas que se pueden insertar en la base de datos
    protected $fillable = [
        'id_role',
        'role_name',
        'role_creation_date'
    ];
    
}
