<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class VerifyCsrfToken
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'localhost:3000/*',
        'localhost',
        'livros/*',
        'http://127.0.0.1:8000/livros/*',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     */

}
