<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Address
 * 
 * @property int $id_direccion
 * @property string $detalle_direccion
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $suppliers
 *
 * @package App\Models
 */
class Address extends Eloquent
{
	protected $primaryKey = 'id_direccion';
	public $timestamps = false;

	protected $fillable = [
		'detalle_direccion'
	];

	public function clients()
	{
		return $this->belongsToMany(\App\Models\Client::class, 'address_client', 'id_direccion', 'id_cliente');
	}

	public function suppliers()
	{
		return $this->belongsToMany(\App\Models\Supplier::class, 'address_supplier', 'id_direccion', 'id_proveedor');
	}
}
