<?php

namespace Cyberlpkf\Checklistfacil;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cyberlpkf\Checklistfacil\Skeleton\SkeletonClass
 */
class ChecklistfacilFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'checklistfacil';
    }
}
