<?php

namespace App\Livewire\Mid;

use Livewire\Component;

class Mid04 extends Component
{
    public $show = false;
    protected $listeners = ['showHelp'];



    public function render()
    {
        if ($this->show) {
            toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess(' نمایش داده شد.');
        }
        return view('livewire.mid.mid04')
        ->layout('layouts.app');
    }

    public function showHelp () {
        $this->show = true;
    }
}
