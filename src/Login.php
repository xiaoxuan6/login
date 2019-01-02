<?php

namespace Encore\Login;

use Encore\Admin\Extension;

class Login extends Extension
{
    public $name = 'login';

    public $migrations = __DIR__.'/../database/migrations';

}