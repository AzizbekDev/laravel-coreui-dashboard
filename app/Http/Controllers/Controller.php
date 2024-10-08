<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller
{
    use AuthorizesRequests;

    /**
     * Authorize the user for a given action.
     *
     * @param string $action
     * @param mixed $model
     * @return void
     */
    protected function authorizeAction($action, $model = null)
    {
        // Checks the gate or policy for the given action.
        $this->authorize($action, $model);
    }
}
