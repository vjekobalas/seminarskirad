<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PaginationInfoAndPreviousNext extends Component
{
    public $paginator;

    public function __construct($paginator)
    {
        $this->paginator = $paginator;
    }

    public function render()
    {
        return view('components.pagination-info-and-previous-next');
    }
}
