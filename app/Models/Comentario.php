<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 * 
 * @property int $ID_COMENTARIO
 * @property int|null $ID_COTIZACION
 * @property string|null $COMENTARIO
 * @property int|null $VALORACION
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Cotizacion|null $cotizacion
 *
 * @package App\Models
 */
class Comentario extends Model
{
	protected $table = 'comentario';
	protected $primaryKey = 'ID_COMENTARIO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMENTARIO' => 'int',
		'ID_COTIZACION' => 'int',
		'VALORACION' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_COTIZACION',
		'COMENTARIO',
		'VALORACION',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function cotizacion()
	{
		return $this->belongsTo(Cotizacion::class, 'ID_COTIZACION');
	}
}
