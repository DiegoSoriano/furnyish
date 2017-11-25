<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SaleStatus
 * 
 * @property int $id_estado_venta
 * @property string $descripcion_estado_venta
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models
 */
class SaleStatus extends Eloquent
{
	protected $table = 'sale_status';
	protected $primaryKey = 'id_estado_venta';
	public $timestamps = false;

	protected $fillable = [
		'descripcion_estado_venta'
	];

	public function sales()
	{
		return $this->hasMany(\App\Models\Sale::class, 'id_estado_venta');
	}
}
