<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CourseSimilar extends Component
{
    public $course;

    public function mount($course)
    {
        $this->course = $course;
    }

    public function render()
    {
        return view('livewire.course-similar');
    }
}
