<?php

namespace Dnetix\Redirection\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Socialgest\Instapago\Instapago
 */
class PlacetoPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Dnetix\Redirection\PlacetoPay';
    }
}
