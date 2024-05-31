<?php

namespace nhoncq\authentication;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AuthProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware('web')
            ->group(__DIR__ . '/routes/web.php');
    }
    public function register()
    {
    }
}
