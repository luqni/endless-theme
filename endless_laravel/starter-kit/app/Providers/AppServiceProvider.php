<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('vendor.bootstrap.link', 'link');
        Blade::component('vendor.bootstrap.scriptSrc', 'scriptSrc');
        Blade::component('vendor.bootstrap.alert', 'alert');
        Blade::component('vendor.bootstrap.button', 'button');
        Blade::component('vendor.bootstrap.badge', 'badge');
        Blade::component('vendor.bootstrap.breadcrumb', 'breadcrumb');
        Blade::component('vendor.bootstrap.button-group', 'buttonGroup');
        Blade::component('vendor.bootstrap.card', 'card');
        Blade::component('vendor.bootstrap.carousel', 'carousel');
        Blade::component('vendor.bootstrap.figure', 'figure');
        Blade::component('vendor.bootstrap.input-group', 'inputGroup');
        Blade::component('vendor.bootstrap.jumbotron', 'jumbotron');
        Blade::component('vendor.bootstrap.list-group', 'listGroup');
        Blade::component('vendor.bootstrap.modal', 'modal');
        Blade::component('vendor.bootstrap.pagination', 'pagination');
        Blade::component('vendor.bootstrap.render.pagination', 'pagination');
        Blade::component('vendor.bootstrap.progress', 'progress');
        Blade::component('vendor.bootstrap.table', 'table');
        Blade::component('vendor.bootstrap.a', 'a');
        Blade::component('vendor.bootstrap.i', 'i');
        Blade::component('vendor.bootstrap.input', 'input');
        Blade::component('vendor.bootstrap.img', 'img');
    }
}
