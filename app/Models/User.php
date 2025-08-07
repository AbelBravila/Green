<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * La tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'usuario';

    /**
     * La clave primaria para el modelo.
     *
     * @var string
     */
    protected $primaryKey = 'ID_USUARIO';

    /**
     * Indica si la clave primaria es autoincremental.
     *
     * @var bool
     */
    public $incrementing = true; // Generalmente las claves primarias son autoincrementales

    /**
     * Indica si el modelo debe tener timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ID_ROL',
        'NOMBRE',
        'CORREO',
        'PASSWORD', // Laravel se encarga de hashear esto
        'DIRECCION',
        'TELEFONO',
        'FECHA_CREACION',
        'FECHA_MODIFICACION',
        'ESTADO',
        'email_verified_at',
    ];

    /**
     * Los atributos que deben ocultarse para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'PASSWORD', // Cambiado de 'password' a 'PASSWORD' para coincidir con tu columna
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'PASSWORD' => 'hashed', // Laravel se encargará de hashear automáticamente
        ];
    }

    /**
     * Obtiene el nombre de la columna de correo electrónico del modelo.
     */
    public function getEmailForVerification()
    {
        return $this->CORREO;
    }

    /**
     * Obtiene el nombre de la columna de correo electrónico para la autenticación.
     */
    public function getAuthIdentifierName()
    {
        return 'CORREO';
    }
    
    /**
     * Obtiene la contraseña para la autenticación.
     */
    public function getAuthPassword()
    {
        return $this->PASSWORD;
    }

    /**
     * Obtiene el nombre de la clave de ruta para el modelo.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'ID_USUARIO'; // ¡Este es el cambio principal!
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'ID_ROL');
    }

    public function configuracions()
    {
        return $this->hasMany(Configuracion::class, 'ID_USUARIO');
    }

    public function cotizacions()
    {
        return $this->hasMany(Cotizacion::class, 'ID_USUARIO');
    }
}