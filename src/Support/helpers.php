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
?>