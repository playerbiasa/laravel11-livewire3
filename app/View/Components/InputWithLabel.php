<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputWithLabel extends Component
{
    public $name;
    public $type;
    public $label;
    public $model;
    public function __construct($name, $type, $label, $model)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-with-label');
    }
}
