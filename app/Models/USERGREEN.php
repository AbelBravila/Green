<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usergreen extends Model
{
    use HasFactory;

    // Nombre de la tabla (si no se llama como el modelo en plural)
    protected $table = 'usergreen';

    // Nombre de la clave primaria
    protected $primaryKey = 'id_user';

    // No usar timestamps automáticos si los campos se llaman distinto
    public $timestamps = false;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'user_creation_date',
        'user_status',
        'id_role',
        'address'
    ];

    /**
     * Relación: un usuario pertenece a un rol
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }
}
