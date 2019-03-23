<?php

namespace Encore\Login;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Login $extension)
    {
        if (! Login::boot()) {
            return ;
        }

        if ($migrations = $extension->migrations()) {
            $this->loadMigrationsFrom($migrations);
        }

        $this->publishes([
            __DIR__.'/../resources/lang/zh-CN/validation.php' => resource_path('lang/zh-CN/validation.php'),
            __DIR__.'/../resources/lang/zh-CN/admins.php' => resource_path('lang/zh-CN/admins.php'),
            __DIR__.'/../resources/lang/en/admins.php' => resource_path('lang/en/admins.php'),
        ], 'login');

        $this->app->booted(function () {
            Login::routes(__DIR__.'/../routes/web.php');
        });
    }
}