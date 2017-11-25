<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property int $id_cliente
 * @property string $nombre_cliente
 * @property string $telefono_cliente
 * @property string $email_cliente
 * @property string $detalles_cliente
 * 
 * @property \App\Models\Sale $sale
 * @property \Illuminate\Database\Eloquent\Collection $addresses
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $primaryKey = 'id_cliente';
	public $timestamps = false;

	protected $fillable = [
		'nombre_cliente',
		'telefono_cliente',
		'email_cliente',
		'detalles_cliente'
	];

	public function sale()
	{
		return $this->belongsTo(\App\Models\Sale::class, 'id_cliente', 'id_cliente');
	}

	public function addresses()
	{
		return $this->belongsToMany(\App\Models\Address::class, 'address_client', 'id_cliente', 'id_direccion');
	}
}
