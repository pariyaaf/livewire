<?php

namespace App\Livewire\Mid;

use Livewire\Component;
use App\Models\Course;

class Mid02 extends Component
{
    public $welcomeText;
    public $course;

    public function render()
    {
        return view('livewire.mid.mid02')
        ->layout('layouts.app');
    }

    public function mount ($id) {
        $this->fill([
        'welcomeText' => 'hello everybody',
        'course' => Course::find($id),
        ]);
    }

    public function  resetProperties() {
        $this->reset(
            'course',
            'welcomeText'
        );
    }
}
