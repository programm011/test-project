<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Resource extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public \App\Models\Resource $resource
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
        return view('components.table.resource');
    }
}
