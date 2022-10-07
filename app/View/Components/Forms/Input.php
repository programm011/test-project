<?php

namespace App\View\Components\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Input extends Component
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
        public string|null $placeholder = null,
        public string|null $value = null,
        public bool $required = false,
        public bool $disabled = false,
        public bool $autofocus = false,
        public int $id = 0,
    )
    {
        $this->id = $id==0??rand(1, 100);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
