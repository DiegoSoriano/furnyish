<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FurnishingType
 * 
 * @property int $id_tipo_mueble
 * @property string $descripcion_tipo_mueble
 * 
 * @property \Illuminate\Database\Eloquent\Collection $furnishings
 *
 * @package App\Models
 */
class FurnishingType extends Eloquent
{
	protected $table = 'furnishing_type';
	protected $primaryKey = 'id_tipo_mueble';
	public $timestamps = false;

	protected $fillable = [
		'descripcion_tipo_mueble'
	];

	public function furnishings()
	{
		return $this->hasMany(\App\Models\Furnishing::class, 'id_tipo_mueble');
	}
}
