<?php

namespace App\Providers;

use App\FasilitasMenu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $fasilitas_menu = FasilitasMenu::all();
        View::share('fasilitas_menu', $fasilitas_menu);
    }
}
