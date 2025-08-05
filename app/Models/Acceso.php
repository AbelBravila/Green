<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Acceso
 * 
 * @property int $ID_ACCESO
 * @property string|null $ACCESO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Collection|Rol[] $rols
 *
 * @package App\Models
 */
class Acceso extends Model
{
	protected $table = 'acceso';
	protected $primaryKey = 'ID_ACCESO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ACCESO' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ACCESO',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'rol_acceso', 'ID_ACCESO', 'ID_ROL')
					->withPivot('ID_ROL_ACCESO', 'ESTADO');
	}
}
