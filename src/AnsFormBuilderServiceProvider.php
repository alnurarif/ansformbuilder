<?php

namespace Ans\Ansformbuilder;

use Illuminate\Support\ServiceProvider;

class AnsFormBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('ans_form_builder', function()
        {
            return new Ansformbuilder();
        });
    }
}
