<?php

namespace Lonban\CaseHistory\Facades;

use Illuminate\Support\Facades\Facade as BasicFacade;

class Facade extends BasicFacade
{
    protected static function getFacadeAccessor()
    {
        return 'Vcc_CaseHistory';
    }
}