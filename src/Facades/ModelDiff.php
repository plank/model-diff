<?php

namespace Plank\ModelDiff\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Plank\ModelDiff\ModelDiff
 */
class ModelDiff extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Plank\ModelDiff\ModelDiff::class;
    }
}
