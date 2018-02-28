<?php
namespace Hard\utils;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model {
	protected $table = 'configuration';
}