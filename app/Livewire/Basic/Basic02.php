<?php

namespace App\Livewire\Basic;

use Livewire\Component;

class Basic02 extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- Do your work, then step back. --}}
            <hr>
            <h3>این یک فایل inline  است!</h3>
        </div>
        HTML;
    }
}
