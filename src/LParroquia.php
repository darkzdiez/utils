<?php
namespace Hard\Utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LParroquia extends Model {
	use SoftDeletes;
	protected $table = 'location_parroquias';

	public function Municipio()
	{
		return $this->belongsTo('Hard\Utils\LMunicipio', 'municipio_id');
	}
}