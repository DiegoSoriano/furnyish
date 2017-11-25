<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Sale
 * 
 * @property int $id_venta
 * @property int $id_cliente
 * @property int $id_vendedor
 * @property int $id_estado_venta
 * @property \Carbon\Carbon $fecha_venta
 * @property string $detalles_venta
 * @property int $id_metodo_pago
 * 
 * @property \App\Models\Salesman $salesman
 * @property \App\Models\MethodPayment $method_payment
 * @property \App\Models\SaleStatus $sale_status
 * @property \App\Models\Client $client
 * @property \Illuminate\Database\Eloquent\Collection $furnishings
 *
 * @package App\Models
 */
class Sale extends Eloquent
{
	protected $primaryKey = 'id_venta';
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_vendedor' => 'int',
		'id_estado_venta' => 'int',
		'id_metodo_pago' => 'int'
	];

	protected $dates = [
		'fecha_venta'
	];

	protected $fillable = [
		'id_cliente',
		'id_vendedor',
		'id_estado_venta',
		'fecha_venta',
		'detalles_venta',
		'id_metodo_pago'
	];

	public function salesman()
	{
		return $this->belongsTo(\App\Models\Salesman::class, 'id_vendedor');
	}

	public function method_payment()
	{
		return $this->belongsTo(\App\Models\MethodPayment::class, 'id_metodo_pago');
	}

	public function sale_status()
	{
		return $this->belongsTo(\App\Models\SaleStatus::class, 'id_estado_venta');
	}

	public function client()
	{
		return $this->hasOne(\App\Models\Client::class, 'id_cliente', 'id_cliente');
	}

	public function furnishings()
	{
		return $this->belongsToMany(\App\Models\Furnishing::class, 'furnishing_sale', 'id_venta', 'id_mueble')
					->withPivot('id_producto_venta');
	}
}
