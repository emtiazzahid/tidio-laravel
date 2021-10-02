<?php

namespace EmtiazZahid\Tidio;

use Illuminate\Support\Facades\Facade;

class Tidio extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return \EmtiazZahid\Tidio\TidioAPI::class;
    }
}
