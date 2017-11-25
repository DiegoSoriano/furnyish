<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Supplier
 * 
 * @property int $id_proveedor
 * @property string $nombre_proveedor
 * @property string $telefono_proveedor
 * @property string $detalles_proveedor
 * 
 * @property \Illuminate\Database\Eloquent\Collection $acquisitions
 * @property \Illuminate\Database\Eloquent\Collection $addresses
 *
 * @package App\Models
 */
class Supplier extends Eloquent
{
	protected $primaryKey = 'id_proveedor';
	public $timestamps = false;

	protected $fillable = [
		'nombre_proveedor',
		'telefono_proveedor',
		'detalles_proveedor'
	];

	public function acquisitions()
	{
		return $this->hasMany(\App\Models\Acquisition::class, 'id_proveedor');
	}

	public function addresses()
	{
		return $this->belongsToMany(\App\Models\Address::class, 'address_supplier', 'id_proveedor', 'id_direccion');
	}
}
