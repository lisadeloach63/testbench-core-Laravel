<?php

namespace Orchestra\Testbench\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $guards
     *
     * @return string
     */
    protected function redirectTo($request, array $guards)
    {
        return route('login');
    }
}
