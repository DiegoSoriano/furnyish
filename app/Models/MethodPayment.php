<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class MethodPayment
 * 
 * @property int $id_metodo_pago
 * @property string $descripcion_metodo_pago
 * 
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models
 */
class MethodPayment extends Eloquent
{
	protected $table = 'method_payment';
	protected $primaryKey = 'id_metodo_pago';
	public $timestamps = false;

	protected $fillable = [
		'descripcion_metodo_pago'
	];

	public function sales()
	{
		return $this->hasMany(\App\Models\Sale::class, 'id_metodo_pago');
	}
}
