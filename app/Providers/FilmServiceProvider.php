<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\FilmSessionRepository;
use App\Repositories\FilmInterfaceRepository;

class FilmServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FilmInterfaceRepository::class, FilmSessionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
