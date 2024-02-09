<?php

namespace App\Livewire\Basic;

use Livewire\Component;
use App\Models\Course;

class Basic05 extends Component
{
    public $course ;
    public $input_test;
    public function render()
    {
        
        return view('livewire.basic.basic05')
        ->layout('layouts.app');
    }

    public function mount($id) {
        $course = Course::findOrFail($id);
        $this->course = $course;
    }
}
