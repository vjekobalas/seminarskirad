<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class NavigationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.dynamic-navigation', function ($view) {
            $title = 'My Title'; // Set the title here
            $createUrl = '/my-url'; // Set the create URL here
            $allUrl = '/my-all-url'; // Set the all URL here
    
            $view->with([
                'title' => $title,
                'createUrl' => $createUrl,
                'allUrl' => $allUrl,
            ]);
        });
    }
}
