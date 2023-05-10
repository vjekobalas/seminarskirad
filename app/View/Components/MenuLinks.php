<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuLinks extends Component
{

    public $menus;
    public $position;
    
    /**
     * Create a new component instance.
     */
    public function __construct($menus, $position)
    {
        $this->menus = $menus;
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.menu-links');
    }
}
