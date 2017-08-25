<?php
namespace Hard\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LEstado extends Model {
	use SoftDeletes;
	protected $table = 'location_estados';

    public function Municipios() {
        return $this->hasMany('Hard\Utils\LMunicipio', 'estado_id');
    }
}