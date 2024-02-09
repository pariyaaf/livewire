<?php

namespace App\Livewire\Basic;

use Livewire\Component;
use App\Models\Course;

class Basic extends Component
{
    public $courseTitle = "";

    public $title = "";
    public $type = "";

    public function render()
    {
        return view('livewire.basic.basic');
    }

    public function mount($course) {//این همیشه باید باشه
        $this->title = $course->title;
        $this->type = $course->type;
    }

    public function getCourseTitle() {
        $id = rand(3,4);
        $courses = Course::find($id);
        $this->courseTitle = $courses->title;

    }
}
