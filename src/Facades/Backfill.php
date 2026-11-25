<?php

declare(strict_types=1);

namespace Backfill\Backfill\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Backfill\Backfill\Backfill
 */
class Backfill extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Backfill\Backfill\Backfill::class;
    }
}
