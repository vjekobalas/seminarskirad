<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.dynamic-navigation', function ($view) {
            $title = '';
            $createUrl = '';
            $allUrl = '';

            // Check the current route name to determine the appropriate values for the navigation component.
            $routeName = \Route::currentRouteName();

            switch ($routeName) {
                case 'users.index':
                    $title = 'Users';
                    $createUrl = route('users.create');
                    $allUrl = route('users.index');
                    break;
                case 'roles.index':
                    $title = 'Roles';
                    $createUrl = route('roles.create');
                    $allUrl = route('roles.index');
                    break;
                // Add more cases for other routes as needed.
                default:
                    // Set default values if the current route doesn't match any of the cases above.
                    $title = 'Default Title';
                    $createUrl = '#';
                    $allUrl = '#';
            }

            // Pass the values to the view.
            $view->with([
                'title' => $title,
                'createUrl' => $createUrl,
                'allUrl' => $allUrl,
            ]);
        });
    }
}
