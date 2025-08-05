<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $ID_USUARIO
 * @property int|null $ID_ROL
 * @property string|null $NOMBRE
 * @property string|null $CORREO
 * @property varbinary|null $PASSWORD
 * @property string|null $DIRECCION
 * @property string|null $TELEFONO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Rol|null $rol
 * @property Collection|Configuracion[] $configuracions
 * @property Collection|Cotizacion[] $cotizacions
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'ID_USUARIO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USUARIO' => 'int',
		'ID_ROL' => 'int',
		'PASSWORD' => 'varbinary',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_ROL',
		'NOMBRE',
		'CORREO',
		'PASSWORD',
		'DIRECCION',
		'TELEFONO',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

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
