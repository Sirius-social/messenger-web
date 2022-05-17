<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Divider extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('web.components.divider');
    }
}
