<?php

namespace Aitor24\Linker\Facades;

use Aitor24\Linker\Builder;
use Illuminate\Support\Facades\Facade;

class LocalizerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    public static function getFacadeAccessor()
    {
        return Builder::class;
    }
}
