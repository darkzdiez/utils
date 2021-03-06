<?php
namespace Hard\Utils;

use Gate;
use Illuminate\Support\Facades\Log;
use App\EnvVar;

class DConfig
{

    public function get($config_key)
    {
    	$config = EnvVar::where('config_key', $config_key)->first();
    	if ($config != null) {
    		return $config->config_value;
    	}
    	return null;
    }
    public function check($config_key, $config_value)
    {
    	$config = $this->get($config_key);
    	if ($config == $config_value) {
    		return true;
    	}
    	return false;
    }

}
