<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FurnishingSale
 * 
 * @property int $id_producto_venta
 * @property int $id_venta
 * @property int $id_mueble
 * 
 * @property \App\Models\Furnishing $furnishing
 * @property \App\Models\Sale $sale
 *
 * @package App\Models
 */
class FurnishingSale extends Eloquent
{
	protected $table = 'furnishing_sale';
	protected $primaryKey = 'id_producto_venta';
	public $timestamps = false;

	protected $casts = [
		'id_venta' => 'int',
		'id_mueble' => 'int'
	];

	protected $fillable = [
		'id_venta',
		'id_mueble'
	];

	public function furnishing()
	{
		return $this->belongsTo(\App\Models\Furnishing::class, 'id_mueble');
	}

	public function sale()
	{
		return $this->belongsTo(\App\Models\Sale::class, 'id_venta');
	}
}
