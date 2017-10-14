<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', [
            'name',
            'value' => null,
            'attributes' => ['class' => 'form-control'],
        ]);
        Form::component('bsTextarea', 'components.form.textarea', [
            'name',
            'value' => null,
            'attributes' => ['class' => 'form-control', 'rows' => 5],
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register(\MaddHatter\ViewGenerator\ServiceProvider::class);
        }
    }
}
