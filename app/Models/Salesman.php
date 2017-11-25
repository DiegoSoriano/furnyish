<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Salesman
 * 
 * @property int $id_vendedor
 * @property string $nombre_vendedor
 * @property string $detalles_vendedor
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models
 */
class Salesman extends Eloquent
{
	protected $primaryKey = 'id_vendedor';
	public $timestamps = false;

	protected $fillable = [
		'nombre_vendedor',
		'detalles_vendedor'
	];

	public function sales()
	{
		return $this->hasMany(\App\Models\Sale::class, 'id_vendedor');
	}
}
