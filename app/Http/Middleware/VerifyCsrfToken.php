<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'api/admin/api-login',
        'api/admin/orders/store',
        'api/admin/orders/update/*',
        'api/admin/orders/delete/*', 
    ];
    
}
