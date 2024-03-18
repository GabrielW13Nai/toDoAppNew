<?php

namespace App\Http\Middleware;

use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class EnsureUserIsAdmin extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     *
     * @var array<int, string>
     */
    // protected $except = [
    //     //
    // ];

}
