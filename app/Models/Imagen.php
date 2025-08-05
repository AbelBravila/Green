<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Imagen
 * 
 * @property int $ID_IMAGEN
 * @property int|null $ID_SERVICIO
 * @property string|null $PATH
 * @property string|null $CONFIG
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Servicio|null $servicio
 *
 * @package App\Models
 */
class Imagen extends Model
{
	protected $table = 'imagen';
	protected $primaryKey = 'ID_IMAGEN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_IMAGEN' => 'int',
		'ID_SERVICIO' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_SERVICIO',
		'PATH',
		'CONFIG',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'ID_SERVICIO');
	}
}
