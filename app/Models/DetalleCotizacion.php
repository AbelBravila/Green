<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleCotizacion
 * 
 * @property int $ID_DETALLE
 * @property int|null $ID_CAMPO
 * @property int|null $ID_COTIZACION
 * @property string|null $DESCRIPCION
 * @property float|null $VALOR_ESTIMADO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property CampoServicio|null $campo_servicio
 * @property Cotizacion|null $cotizacion
 *
 * @package App\Models
 */
class DetalleCotizacion extends Model
{
	protected $table = 'detalle_cotizacion';
	protected $primaryKey = 'ID_DETALLE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_DETALLE' => 'int',
		'ID_CAMPO' => 'int',
		'ID_COTIZACION' => 'int',
		'VALOR_ESTIMADO' => 'float',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_CAMPO',
		'ID_COTIZACION',
		'DESCRIPCION',
		'VALOR_ESTIMADO',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function campo_servicio()
	{
		return $this->belongsTo(CampoServicio::class, 'ID_CAMPO');
	}

	public function cotizacion()
	{
		return $this->belongsTo(Cotizacion::class, 'ID_COTIZACION');
	}
}
