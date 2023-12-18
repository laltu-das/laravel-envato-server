<?php

namespace Laltu\LaravelEnvatoServer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laltu\LaravelEnvatoServer\Skeleton\SkeletonClass
 */
class LaravelEnvatoServerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-envato-server';
    }
}
