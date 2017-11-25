<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Acquisition
 * 
 * @property int $id_acquisition
 * @property int $id_proveedor
 * @property int $id_mueble
 * @property \Carbon\Carbon $fecha_adquisicion
 * @property int $monto_adquisicion
 * @property int $valor_adquisicion
 * 
 * @property \App\Models\Supplier $supplier
 * @property \App\Models\Furnishing $furnishing
 *
 * @package App\Models
 */
class Acquisition extends Eloquent
{
	protected $primaryKey = 'id_acquisition';
	public $timestamps = false;

	protected $casts = [
		'id_proveedor' => 'int',
		'id_mueble' => 'int',
		'monto_adquisicion' => 'int',
		'valor_adquisicion' => 'int'
	];

	protected $dates = [
		'fecha_adquisicion'
	];

	protected $fillable = [
		'id_proveedor',
		'id_mueble',
		'fecha_adquisicion',
		'monto_adquisicion',
		'valor_adquisicion'
	];

	public function supplier()
	{
		return $this->belongsTo(\App\Models\Supplier::class, 'id_proveedor');
	}

	public function furnishing()
	{
		return $this->belongsTo(\App\Models\Furnishing::class, 'id_mueble');
	}
}
