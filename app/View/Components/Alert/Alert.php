<?php

namespace App\View\Components\Alert;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Alert extends Component
{
    public bool $dismissible;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $dismissible = true)
    {
        $this->dismissible = $dismissible;
    }

    abstract public function render(): View|Closure|string;
}
