<div>
    <form wire:submit.prevent="save">

        <input type="file" wire:model="image">
        @error('image')
        {{$message}}
        @enderror

        <input type="text" wire:model="title" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">
        @error('title')
        {{$message}}
        @enderror
        <textarea wire:model="content" wire:dirty.class="text-red-500" name="" id="" cols="30" rows="10" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;"></textarea>
        @error('content')
        {{$message}}
        @enderror
        <button type="submit" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">Submit</button>
        <div wire:dirty>
            form changed(dirty)
        </div>
    </form>

    
    <div style="margin-top: 20px;" wire:init="isLoaded">
        <h2>All Posts:</h2>
        @foreach($posts as $post) 
            <div style="background-color: #f0f0f0; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;">
                <h3>{{$post->title}}</h3>
                <p>{{$post->content}}</p>
                
                @if($post->image)
                <img src="{{ asset( $post->image) }}" width="200px" alt="Post Image">
                @endif
            </div>
        @endforeach
    </div>
    @if($loaded)
        {{ $posts->links('custom-pagination-links') }}
    @endif
</div>
