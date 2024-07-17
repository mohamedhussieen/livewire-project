<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'blade'
        <div>
            Hello mfrom inline component
            </div>
        blade;
    }
}
