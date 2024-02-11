<div style="max-width: 600px; margin: 0 auto;">
    {{-- Because she competes with no one, no one can compete with her. --}}
   <form action="" wire:submit.prevent="save">

    <input type="text" wire:model="title" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">
        @error('title')
        {{$message}}
        @enderror

        <textarea name="" id="" cols="30" rows="10" wire:model="content" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;"></textarea>
        @error('content')
        {{$message}}
        @enderror

        <button type="submit" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">Submit</button>
   </form>

   
   <div style="margin-top: 20px;">
            <h2>All Posts:</h2>
            @foreach($posts as $post) 
                <div style="background-color: #f0f0f0; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                </div>
            @endforeach
        </div>
</div>