<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 22 Nov 2017 07:36:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Furnishing
 * 
 * @property int $id_mueble
 * @property int $id_tipo_mueble
 * @property string $nombre_mueble
 * @property string $material_mueble
 * @property string $color_mueble
 * @property string $estilo_mueble
 * @property string $marca_mueble
 * @property string $detalles_mueble
 * @property int $precio_mueble
 * @property string $furnishing_img
 * 
 * @property \App\Models\FurnishingType $furnishing_type
 * @property \Illuminate\Database\Eloquent\Collection $acquisitions
 * @property \Illuminate\Database\Eloquent\Collection $sales
 *
 * @package App\Models
 */
class Furnishing extends Eloquent
{
	protected $primaryKey = 'id_mueble';
	public $timestamps = false;

	protected $casts = [
		'id_tipo_mueble' => 'int',
		'precio_mueble' => 'int'
	];

	protected $fillable = [
		'id_tipo_mueble',
		'nombre_mueble',
		'material_mueble',
		'color_mueble',
		'estilo_mueble',
		'marca_mueble',
		'detalles_mueble',
		'precio_mueble',
		'furnishing_img'
	];

	public function furnishing_type()
	{
		return $this->belongsTo(\App\Models\FurnishingType::class, 'id_tipo_mueble');
	}

	public function acquisitions()
	{
		return $this->hasMany(\App\Models\Acquisition::class, 'id_mueble');
	}

	public function sales()
	{
		return $this->belongsToMany(\App\Models\Sale::class, 'furnishing_sale', 'id_mueble', 'id_venta')
					->withPivot('id_producto_venta');
	}
}
