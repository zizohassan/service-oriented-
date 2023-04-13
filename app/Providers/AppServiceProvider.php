<?php

namespace App\Providers;

use App\Services\Contracts\PostContract;
use App\Services\Services\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->bind(PostContract::class, PostService::class);
        $this->app->bind('PostService', function () {
            return new PostService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
