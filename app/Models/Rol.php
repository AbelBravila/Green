<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $ID_ROL
 * @property string|null $NOMBRE
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Collection|Acceso[] $accesos
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'ID_ROL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ROL' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'NOMBRE',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function accesos()
	{
		return $this->belongsToMany(Acceso::class, 'rol_acceso', 'ID_ROL', 'ID_ACCESO')
					->withPivot('ID_ROL_ACCESO', 'ESTADO');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'ID_ROL');
	}
}
