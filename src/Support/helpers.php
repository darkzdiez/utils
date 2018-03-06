<?php
if (! function_exists('dconfig')) {
    /**
     * Generate Title for table filter.
     *
     * @param  string  $display_name
     * @param  string  $key_name
     * @return string
     */
    function dconfig()
    {
        return new Hard\Utils\DConfig;
    }
}
if (! function_exists('dconfig')) {
    /**
     * Generate Title for table filter.
     *
     * @param  string  $display_name
     * @param  string  $key_name
     * @return string
     */
    function dconfig()
    {
        return new Hard\Utils\DConfig;
    }
}
if (! function_exists('sanitizeNumber')) {
    /**
     * Generate Title for table filter.
     *
     * @param  string  $display_name
     * @param  string  $key_name
     * @return string
     */
    function sanitizeNumber($value)
    {
        $string = str_split($value);
        $valid = '';
        foreach ($string as $character) {
            if(preg_match('/([0-9]|\.)/',$character)){
                $valid .= $character;
            }
        }
        return $valid;
    }
}

?>