<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use JavaScript;

class MenuServiceProvider extends ServiceProvider
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
    public function boot() {   
      $hello = "Hello";
      JavaScript::put([
        'hello' => $hello
      ]);
      view()->share('hello', $hello);
    }
}
