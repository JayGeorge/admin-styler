<?php

namespace Jaygeorge\AdminStyler;

// Needed to read custom styles
use Statamic\Statamic;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    // Admin Styler
    protected $stylesheets = [
        __DIR__.'/../resources/css/admin-styler-base.css'
    ];

    public function boot()
    {
        parent::boot();

        Statamic::style('admin-styler', 'admin-style-custom');
    }

}