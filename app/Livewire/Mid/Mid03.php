<?php

namespace App\Livewire\Mid;

use Livewire\Component;
use App\Models\PostLw;

class Mid03 extends Component
{
    public $posts;
    public $title;
    public $content;

    public $topTitle = "hello";
    public $isSuccess =0 ;


    public function render()
    {
        $this->allPosts();
        return view('livewire.mid.mid03')
        ->layout('layouts.app');

    }

    public function allPosts(){
        $this->posts = PostLw::latest()->get();
    }
    public function save()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:3|max:255', // Example validation rules
            'content' => 'required|min:10',
        ]);
        if ($validatedData) {
            PostLw::create([
                'title' => $this->title,
                'content' => $this->content
            ]);
    
            $this->allPosts();
            toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess('پست با موفقیت اضافه شد.');
    
            $this->reset('title', 'content');
        } else {
            toastr()
            ->persistent()
            ->closeButton()
            ->addError('خطا در ایجاد پست.');
        }
      
    }
}
