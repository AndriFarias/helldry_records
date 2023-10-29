<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */

     public $placeholder;
     public $name;
     public $id;
     public $value;
     public $type;
     public $maxlength;
     
    public function __construct($placeholder = null,$id = null, $name = null, $value = null, $type = 'text', $maxlength= 256)
    {
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->type = $type;
        $this->maxlength = $maxlength;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
