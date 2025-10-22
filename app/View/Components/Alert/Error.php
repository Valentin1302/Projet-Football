<?php

namespace App\View\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;

class Error extends Alert
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert.error');
    }
}
