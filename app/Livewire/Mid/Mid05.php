<?php

namespace App\Livewire\Mid;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\PostLw;

class Mid05 extends Component
{

    use withFileUploads;
    use WithPagination;


    public $image;
    public $title;
    public $content; 
    // public $posts;
    public $loaded = false;
    
    

    public function render() {
        return view('livewire.mid.mid05',[
            'posts' => $this->loaded ? PostLw::latest()->paginate(4) : [],
        ])
        ->layout('layouts.app');
    }

    public function isLoaded() {
        $this->loaded =true;
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


        toastr()
            ->persistent()
            ->closeButton()
            ->addSuccess('پست تصویر دار با موفقیت اضافه شد.');

        $this->reset('title', 'content', 'image');
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }



}
