<?php

namespace App\Providers;

use App\Http\Composers\PortfolioComposer;
use App\Http\Composers\ProjectsComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer(
            ['main.home.home'],
            PortfolioComposer::class
        );

        View::composer(
            ['main.home.home'],
            ProjectsComposer::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
