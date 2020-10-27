<?php

namespace Armincms\Cashier;
 
use Illuminate\Support\Manager;
use Armincms\Cashier\Contracts\Port;

class Cashier extends Manager
{ 
    /**
     * Get the port instance.
     * 
     * @param  string $port
     * @return       
     */
    public function port(string $port)
    {
        return $this->driver($port);
    }

    /**
     * Create a new driver instance.
     *
     * @param  string  $driver
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    protected function createDriver($driver)
    {
        return tap(parent::createDriver($driver), function($instance) use ($driver) {
            throw_unless(
                $instance instanceof Port, 
                \InvalidArgumentException::class,
                "Driver [$driver] should implement the \Armincms\Cashier\Contracts\Port."
            );
        });
    }
}
