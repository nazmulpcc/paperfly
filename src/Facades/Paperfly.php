<?php

namespace Nazmul\Paperfly\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nazmul\Paperfly\Paperfly
 */
class Paperfly extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nazmul\Paperfly\Paperfly::class;
    }
}
