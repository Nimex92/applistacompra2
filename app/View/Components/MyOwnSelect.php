<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyOwnSelect extends Component
{
    public $id;
    public $disabled;
    public $required;
    public $name;
    public $options;
    public $text;
    /**
     * Create a new component instance.
     */
    public function __construct($id = '', $disabled = false, $required = false, $name = 'selectfield', $options = [], $text = 'Select an option')
    {
        $this->id = $id;
        $this->disabled = $disabled;
        $this->required = $required;
        $this->name = $name;
        $this->options = $options;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-own-select');
    }
}
