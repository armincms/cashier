<?php 

namespace Armincms\Cashier\Facades;

use Illuminate\Support\Facades\Facade; 


class Cashier extends Facade
{ 
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
    	return 'cashier';
    } 
}