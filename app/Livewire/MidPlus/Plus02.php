<?php

namespace App\Livewire\MidPlus;

use Livewire\Component;
use App\Models\PostLw;

class Plus02 extends Component
{
    public $clockColor = true;
    public $showPosts = false;

    public function render()
    { 
        return view('livewire.mid-plus.plus02',[
            'count'=>PostLw::count(),
            'posts' =>PostLw::latest()->get()
        ])
        ->layout('layouts.app');
        
    }

    public function addNum () {
    }

    public function changeColor() {
        $this->clockColor  = !$this->clockColor;
    }
}
