<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'USUARIO';
    protected $primaryKey = 'ID_USUARIO';
    public $timestamps = false;

    protected $fillable = [
        'ID_ROL',
        'NOMBRE',
        'CORREO',
        'PASSWORD',
        'DIRECCION',
        'TELEFONO',
        'FECHA_CREACION',
        'FECHA_MODIFICACION',
        'ESTADO',
        'email_verified_at',
    ];

    protected $hidden = [
        'PASSWORD',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'PASSWORD' => 'hashed',
        ];
    }

    // --- INICIO DE LAS CORRECCIONES ---

    /**
     * Define la columna de la contraseña para la autenticación.
     */
    public function getAuthPassword()
    {
        return $this->PASSWORD;
    }

    /**
     * Define el nombre de la clave de ruta para el modelo.
     * Esto es para que las URLs usen ID_USUARIO.
     */
    public function getRouteKeyName()
    {
        return 'ID_USUARIO';
    }

    /**
     * Define la columna de correo para la verificación.
     */
    public function getEmailForVerification()
    {
        return $this->CORREO;
    }

    /**
     * ¡ESTA ES LA FUNCIÓN CLAVE QUE SOLUCIONA TODO!
     * Le dice al sistema de Notificaciones qué dirección de correo usar.
     */
    public function routeNotificationForMail($notification)
    {
        return $this->CORREO;
    }
/*Relaciones*/
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