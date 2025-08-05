<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuracion
 * 
 * @property int $ID_CONFIGURACION
 * @property int|null $ID_USUARIO
 * @property string|null $CONFIGURACION
 * @property Carbon|null $FECHA_CREACION
 * @property Carbon|null $FECHA_MODIFICACION
 * @property string|null $ESTADO
 * 
 * @property Usuario|null $usuario
 * @property Collection|ConfiguracionTipo[] $configuracion_tipos
 *
 * @package App\Models
 */
class Configuracion extends Model
{
	protected $table = 'configuracion';
	protected $primaryKey = 'ID_CONFIGURACION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CONFIGURACION' => 'int',
		'ID_USUARIO' => 'int',
		'FECHA_CREACION' => 'datetime',
		'FECHA_MODIFICACION' => 'datetime'
	];

	protected $fillable = [
		'ID_USUARIO',
		'CONFIGURACION',
		'FECHA_CREACION',
		'FECHA_MODIFICACION',
		'ESTADO'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'ID_USUARIO');
	}

	public function configuracion_tipos()
	{
		return $this->hasMany(ConfiguracionTipo::class, 'ID_CONFIGURACION');
	}
}
