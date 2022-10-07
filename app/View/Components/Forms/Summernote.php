<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Summernote extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public string $label,
        public string|null $value = null,
        public bool $required = false,
        public int|null $id = null,
    ) {
        $this->id = $id ?? rand(1, 100);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.summernote');
    }
}
