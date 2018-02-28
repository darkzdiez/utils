<?php

namespace Hard\Utils;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collective\Html\FormBuilder
 */
class DConfigFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'DConfig';
    }
}
