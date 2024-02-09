<?php

namespace App\Livewire\Mid;

use Livewire\Component;
use App\Models\TaskLw;
use App\Models\User;


class Mid01 extends Component
{
    public $user_ids;
    public $task;
    public $selectedUser;
    public $userTaskes = '';

    public function render()
    {
        $this->user_ids = User::latest()->pluck('name', 'id')->toArray();
        // dd($this->user_ids);
        return view('livewire.mid.mid01')
        ->layout('layouts.app');
    }

    public function save() {
        // dd($this->task,$this->selectedUser);
        TaskLw::create([
            'user_id' =>$this->selectedUser,
            'tasks' => $this->task,
        ]);

        $this->tasksOfUser();
        toastr()
        ->persistent()
        ->closeButton()
        ->addSuccess('تسک با موفقیت اضافه شد.');
    }

    public function tasksOfUser() {
        $this->userTaskes = TaskLw::where('user_id',$this->selectedUser)->pluck('tasks');
    }
}
