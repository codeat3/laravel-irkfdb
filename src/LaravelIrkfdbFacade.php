<?php

namespace Codeat3\LaravelIrkfdb;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\LaravelIrkfdb\Skeleton\SkeletonClass
 */
class LaravelIrkfdbFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-irkfdb';
    }
}
