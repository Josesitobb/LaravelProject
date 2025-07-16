<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
    * The application's global HTTP middleware stack.
    *
    * @var array<int, class-string|string>
    */

    protected $middleware = [
        //\App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Htpp\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The applicaion's route middleware groups.
     * 
     * @var array<string, array<int, class-string|string>>
     */

    protected $middlewareGroups =[
        'web'=>[
           \App\Htpp\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class ,
            // \Illuminate\sesson\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
        'api'=>[
            //
            // \Laravel\Sanctum\Htpp\Middleware\EnsureFrontendRequestsAreStateFull::class
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

      
];

  /**
     * The applicaion's route middleware groups.
     * 
     * These middleware may be assigned to groups 
     * 
     * @var array<string, array<int, class-string|string>>
     */
    
    protected $routerMiddleware = [
        'auth'=>\App\Http\Middleware\Authenticate::class,
        'auth.basic'=> \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session'=> \Illuminate\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \Illuminate\Htpp\Middleware\SetCacheHeaders::class,
        'can'=> \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm'=> \Illuminate\Auth\Middleware\EnsureFrontendRequestsAreStateful ::class,
        'signed'=> \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified'=>\Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        // Middleware personalzados
        'admin'=> \App\Htpp\Middleware\AdminMiddleware::class,
        'coordinador ' => \App\Htpp\Middleware\Coordinador\CoordinadorMiddleware::class,

        ]; 


    
};