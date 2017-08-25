<?php
namespace Hard\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LMunicipio extends Model {
	use SoftDeletes;
	protected $table = 'location_municipios';

	public function Estado()
	{
		return $this->belongsTo('Hard\Utils\LEstado', 'estado_id');
	}
    public function Parroquias() {
        return $this->hasMany('Hard\Utils\LParroquia', 'municipio_id');
    }

}