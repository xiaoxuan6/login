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

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'login');

        $this->app->booted(function () {
            Login::routes(__DIR__.'/../routes/web.php');
        });
    }
}