<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class DynamicNavigation extends Component
{
    public $title;
    public $createUrl;
    public $allUrl;

    public function __construct($title, $createUrl, $allUrl)
    {
        $this->title = $title;
        $this->createUrl = $createUrl;
        $this->allUrl = $allUrl;
    }

    public function render()
    {
        $user = Auth::user();
        $route = Route::currentRouteName();

        if ($route == 'users.index') {
            $navLinks = [
                ['text' => 'All Users', 'url' => '/users'],
                ['text' => 'Add New', 'url' => '/users/create'],
                ['text' => 'Home', 'url' => '/home']
            ];
        } elseif ($route == 'roles.index') {
            $navLinks = [
                ['text' => 'All Roles', 'url' => '/roles'],
                ['text' => 'Add New', 'url' => '/roles/create'],
                ['text' => 'Home', 'url' => '/home']
            ];
        } elseif ($route == 'categories.index') {
            $navLinks = [
                ['text' => 'All Categories', 'url' => '/categories'],
                ['text' => 'Add New', 'url' => '/categories/create'],
                ['text' => 'Home', 'url' => '/home']
            ];
        } elseif ($route == 'menus.index') {
            $navLinks = [
                ['text' => 'All Menus', 'url' => '/menus'],
                ['text' => 'Add New', 'url' => '/menus/create'],
                ['text' => 'Home', 'url' => '/home']
            ];
        } elseif ($route == 'pages.index') {
            $navLinks = [
                ['text' => 'All Pages', 'url' => '/pages'],
                ['text' => 'Add New', 'url' => '/pages/create'],
                ['text' => 'Home', 'url' => '/home']
            ];
        } elseif ($route == 'welcome') {
            $navLinks = [
                ['text' => 'Register', 'url' => '/register'],
                ['text' => 'Login', 'url' => '/login']
            ];
        } elseif ($route == 'home') {
            $navLinks = [
                ['text' => 'Logout', 'url' => '/logout']
            ];
        }

        return view('components.dynamic-navigation', [
            'navLinks' => $navLinks,
            'title' => $this->title,
            'createUrl' => $this->createUrl,
            'allUrl' => $this->allUrl
        ]);
    }
}