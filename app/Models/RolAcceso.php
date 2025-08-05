<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RolAcceso
 * 
 * @property int $ID_ROL_ACCESO
 * @property int|null $ID_ROL
 * @property int|null $ID_ACCESO
 * @property string|null $ESTADO
 * 
 * @property Rol|null $rol
 * @property Acceso|null $acceso
 *
 * @package App\Models
 */
class RolAcceso extends Model
{
	protected $table = 'rol_acceso';
	protected $primaryKey = 'ID_ROL_ACCESO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ROL_ACCESO' => 'int',
		'ID_ROL' => 'int',
		'ID_ACCESO' => 'int'
	];

	protected $fillable = [
		'ID_ROL',
		'ID_ACCESO',
		'ESTADO'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'ID_ROL');
	}

	public function acceso()
	{
		return $this->belongsTo(Acceso::class, 'ID_ACCESO');
	}
}
