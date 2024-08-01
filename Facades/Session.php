<?php

namespace Illuminate\Support\Facades;

/**
 * @mixin \Illuminate\Session\SessionManager
 */
class Session extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'session';
    }
}
