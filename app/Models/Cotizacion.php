<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotizacion
 * 
 * @property int $ID_COTIZACION
 * @property int|null $ID_USUARIO
 * @property int|null $ID_SERVICIO
 * @property string|null $TRABAJO_ESTIMADO
 * @property float|null $COSTO_ESTIMADO
 * @property string|null $ESTADO_COTIZACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property Carbon|null $FECHA_CREACION
 * @property string|null $ESTADO
 * 
 * @property Usuario|null $usuario
 * @property Servicio|null $servicio
 * @property Collection|Comentario[] $comentarios
 * @property Collection|DetalleCotizacion[] $detalle_cotizacions
 *
 * @package App\Models
 */
class Cotizacion extends Model
{
	protected $table = 'cotizacion';
	protected $primaryKey = 'ID_COTIZACION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COTIZACION' => 'int',
		'ID_USUARIO' => 'int',
		'ID_SERVICIO' => 'int',
		'COSTO_ESTIMADO' => 'float',
		'FECHA_MODIFICACION' => 'datetime',
		'FECHA_CREACION' => 'datetime'
	];

	protected $fillable = [
		'ID_USUARIO',
		'ID_SERVICIO',
		'TRABAJO_ESTIMADO',
		'COSTO_ESTIMADO',
		'ESTADO_COTIZACION',
		'FECHA_MODIFICACION',
		'FECHA_CREACION',
		'ESTADO'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'ID_USUARIO');
	}

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'ID_SERVICIO');
	}

	public function comentarios()
	{
		return $this->hasMany(Comentario::class, 'ID_COTIZACION');
	}

	public function detalle_cotizacions()
	{
		return $this->hasMany(DetalleCotizacion::class, 'ID_COTIZACION');
	}
}
