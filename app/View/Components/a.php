<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class a extends Component
{
    /**
     * Create a new component instance.
     */
    public $message;
    public $href;
    public $cor;
    public function __construct($message = null, $href = null, $cor= 'primary')
    {
        $this->message = $message;
        $this->href = $href;
        $this->cor = $cor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.a');
    }
}
