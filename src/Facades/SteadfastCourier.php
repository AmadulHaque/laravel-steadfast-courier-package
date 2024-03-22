<?php

namespace AmadulHaque\LaravelSteadfastCourier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AmadulHaque\LaravelSteadfastCourier\SteadfastCourier
 */
class SteadfastCourier extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AmadulHaque\LaravelSteadfastCourier\SteadfastCourier::class;
    }
}
