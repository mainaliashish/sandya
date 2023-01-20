<?php

namespace App\Providers;
use App\Models\About;
use App\Models\Service;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        $about = About::first();
        $services_title = Service::orderBy('is_featured', 'desc')->take(6)->get();
        View::share([
            'about'         => $about,
            'q'             => $q ?? '',
            'services_title' => $services_title,
        ]);
    }
}
