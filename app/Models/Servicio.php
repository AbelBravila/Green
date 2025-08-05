<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 * 
 * @property int $ID_SERVICIO
 * @property string|null $NOMBRE
 * @property string|null $DESCRIPCION
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Collection|CampoServicio[] $campo_servicios
 * @property Collection|Cotizacion[] $cotizacions
 * @property Collection|Imagen[] $imagens
 *
 * @package App\Models
 */
class Servicio extends Model
{
	protected $table = 'servicio';
	protected $primaryKey = 'ID_SERVICIO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SERVICIO' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'NOMBRE',
		'DESCRIPCION',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function campo_servicios()
	{
		return $this->hasMany(CampoServicio::class, 'ID_SERVICIO');
	}

	public function cotizacions()
	{
		return $this->hasMany(Cotizacion::class, 'ID_SERVICIO');
	}

	public function imagens()
	{
		return $this->hasMany(Imagen::class, 'ID_SERVICIO');
	}
}
