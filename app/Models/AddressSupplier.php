<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AddressSupplier
 * 
 * @property int $id_proveedor
 * @property int $id_direccion
 * 
 * @property \App\Models\Supplier $supplier
 * @property \App\Models\Address $address
 *
 * @package App\Models
 */
class AddressSupplier extends Eloquent
{
	protected $table = 'address_supplier';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_proveedor' => 'int',
		'id_direccion' => 'int'
	];

	protected $fillable = [
		'id_proveedor',
		'id_direccion'
	];

	public function supplier()
	{
		return $this->belongsTo(\App\Models\Supplier::class, 'id_proveedor');
	}

	public function address()
	{
		return $this->belongsTo(\App\Models\Address::class, 'id_direccion');
	}
}
