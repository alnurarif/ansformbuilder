<?php

namespace Alnurarif\Ansformbuilder\Facades;

use Illuminate\Support\Facades\Facade;

class AnsformbuilderFacade extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'ans_form_builder'; }
}
