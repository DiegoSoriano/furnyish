<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AddressClient
 * 
 * @property int $id_cliente
 * @property int $id_direccion
 * 
 * @property \App\Models\Address $address
 * @property \App\Models\Client $client
 *
 * @package App\Models
 */
class AddressClient extends Eloquent
{
	protected $table = 'address_client';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_cliente' => 'int',
		'id_direccion' => 'int'
	];

	protected $fillable = [
		'id_cliente',
		'id_direccion'
	];

	public function address()
	{
		return $this->belongsTo(\App\Models\Address::class, 'id_direccion');
	}

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'id_cliente');
	}
}
