<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'usuario';
    protected $primaryKey = 'ID_USUARIO';
    public $incrementing = false;
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ID_USUARIO' => 'int',
            'ID_ROL' => 'int',
            'FECHA_CREACION' => 'datetime',
            'FECHA_MODIFICACION' => 'datetime',
            'email_verified_at' => 'datetime',
        ];
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
    public function getEmailAttribute()
    {
        return $this->CORREO;
    }
    public function getEmailForVerification()
    {
        return $this->CORREO;
    }
        public function getKey()
    {
        return $this->getAttribute($this->primaryKey); // ID_USUARIO
    }
    public function getRouteKey()
    {
        return $this->ID_USUARIO;
    }
}
