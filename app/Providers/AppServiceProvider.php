<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    
        Carbon::setLocale('id');
        $public_theme = config('public.theme');
        View::addNamespace('home_satu', resource_path("views/{$public_theme}"));
        // $items = Menu::with('submenu')->where('active', '1')->orderby('id_menu')->get();
        // View::share('navigasi', $items);
        View::share('version', '1.0');
    }
}
