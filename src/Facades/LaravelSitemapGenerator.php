<?php

namespace Xdarko\LaravelSitemapGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xdarko\LaravelSitemapGenerator\LaravelSitemapGenerator
 */
class LaravelSitemapGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Xdarko\LaravelSitemapGenerator\LaravelSitemapGenerator::class;
    }
}
