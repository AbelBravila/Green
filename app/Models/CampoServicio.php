<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CampoServicio
 * 
 * @property int $ID_CAMPO
 * @property int|null $ID_SERVICIO
 * @property string|null $DESCRIPCION
 * @property float|null $VALOR_ESTIMADO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Servicio|null $servicio
 * @property Collection|DetalleCotizacion[] $detalle_cotizacions
 *
 * @package App\Models
 */
class CampoServicio extends Model
{
	protected $table = 'campo_servicio';
	protected $primaryKey = 'ID_CAMPO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CAMPO' => 'int',
		'ID_SERVICIO' => 'int',
		'VALOR_ESTIMADO' => 'float',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_SERVICIO',
		'DESCRIPCION',
		'VALOR_ESTIMADO',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'ID_SERVICIO');
	}

	public function detalle_cotizacions()
	{
		return $this->hasMany(DetalleCotizacion::class, 'ID_CAMPO');
	}
}
