<?php

namespace App\Livewire\Basic;

use Livewire\Component;

class Basic03 extends Component
{
    protected $layout = 'layouts.app';

    public function render()
    {
        return view('livewire.basic.basic03')
        ->layout('layouts.app');
        ;
    }
}
