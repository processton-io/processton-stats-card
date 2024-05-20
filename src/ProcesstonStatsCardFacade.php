<?php

namespace Processton\ProcesstonStatsCard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonStatsCard\Skeleton\SkeletonClass
 */
class ProcesstonStatsCardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-stats-card';
    }
}
