<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfiguracionTipo
 * 
 * @property int $ID_TIPO
 * @property int|null $ID_CONFIGURACION
 * @property string|null $TIPO
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Configuracion|null $configuracion
 *
 * @package App\Models
 */
class ConfiguracionTipo extends Model
{
	protected $table = 'configuracion_tipo';
	protected $primaryKey = 'ID_TIPO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TIPO' => 'int',
		'ID_CONFIGURACION' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_CONFIGURACION',
		'TIPO',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function configuracion()
	{
		return $this->belongsTo(Configuracion::class, 'ID_CONFIGURACION');
	}
}
