<?php

namespace App\Providers;

use App\Models\AppSettings;
use Illuminate\Pagination\Paginator as PaginationPaginator;
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
        PaginationPaginator::useBootstrap();

        $appSettings = cache()->remember('app_settings', 21600, function () {
            return AppSettings::first();
        });

        view()->share('appSettings', $appSettings);
    }
}
