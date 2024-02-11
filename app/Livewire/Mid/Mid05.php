<?php

namespace App\Livewire\Mid;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\PostLw;

class Mid05 extends Component
{

    use withFileUploads;

    public $image;
    public $title;
    public $content; 
    public $posts; 

    public function render() {
        $this->allPosts();
        return view('livewire.mid.mid05')
        ->layout('layouts.app');
    }

    public function allPosts(){
        $this->posts = PostLw::latest()->get();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10',
            'image' => 'image|max:1024',
        ]);

        $imagePath = $this->image->store('public/posts/images');

        PostLw::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => '/storage/posts/images/'.explode("/",$imagePath)[3],
        ]);

        $this->allPosts();

        toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess('پست تصویر دار با موفقیت اضافه شد.');

        $this->reset('title', 'content', 'image');
    }



}
