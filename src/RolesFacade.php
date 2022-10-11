<?php

namespace jeremykenedy\LaravelRoles;

use Illuminate\Support\Facades\Facade;

class RolesFacade extends Facade
{
    /** probnadi
     * Gets the facade NESTOR ACUÑA
     *
     * @return string The facade accessor.
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelroles';
    }
}
