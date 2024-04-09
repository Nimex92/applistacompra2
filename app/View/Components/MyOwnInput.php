<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyOwnInput extends Component
{
    public $id;
    public $disabled;
    public $required;
    public $type;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($id = '', $disabled = false, $required = false, $type = 'text', $name = 'textfield')
    {
        $this->id = $id;
        $this->disabled = $disabled;
        $this->required = $required;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-own-input');
    }
}
