<?php

namespace App\Livewire\Mid;

use Livewire\Component;

class Mid04 extends Component
{
    public $show = false;
    protected $listeners = ['showHelp'];


    public $word ;

    public function rendering() {
        dump('rendering');
        // toastr()
        // ->closeButton()
        // ->addSuccess('befor rendering.');
    }

    public function rendered() {
        dump('rendered');
        // toastr()
        // ->closeButton()
        // ->addSuccess('after rendering.');
    }
    
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


    public function dehydrate() {
    }


    public function updatingWord() {
        $validatedData = $this->validate([
            'word' => 'required|min:5',
        ]);
    }
}
