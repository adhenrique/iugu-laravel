<?php

namespace Iugu\iugu;

use Illuminate\Support\ServiceProvider;

class IuguServiceProvider extends ServiceProvider {

    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Iugu', function () {
            return new IuguService();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Iugu');
    }

}
