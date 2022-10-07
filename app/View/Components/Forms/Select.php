<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public string $label,
        public string $type = 'text',
        public array $options = [],
        public string|null $selected = null,
        public bool $required = false,
        public bool $disabled = false,
        public bool $autofocus = false,
        public array|string|null $value = [],
        public int $id = 0,
        public bool $multiple = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
