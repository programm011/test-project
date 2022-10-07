<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class Actions extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $route, public int $id)
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
        return view('components.table.actions');
    }
}
