<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $message;
    public $cor;
    public function __construct($type = null, $message = null, $cor = "primary")
    {
        $this->type = $type;
        $this->message = $message;
        $this->cor = $cor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
