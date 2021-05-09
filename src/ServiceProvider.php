<?php

namespace Jaygeorge\AdminStyler;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $stylesheets = [
        __DIR__.'/../resources/css/admin-styler.css'
    ];
}
