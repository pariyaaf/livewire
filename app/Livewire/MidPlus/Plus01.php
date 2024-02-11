<?php

namespace App\Livewire\MidPlus;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\PostLw;

class Plus01 extends Component
{

    use withFileUploads;
    use WithPagination;


    public $image;
    public $title;
    public $content; 
    // public $posts;
    
    

    public function render() {
        return view('livewire.mid-plus.plus01',[
            'posts' => PostLw::latest()->paginate(4),
        ])
        ->layout('layouts.app');
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
