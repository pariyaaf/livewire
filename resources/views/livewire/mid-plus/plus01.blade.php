
<div>

{{$title}}

<input type="text" wire:model.live="title">
<button wire:loading.class="opacity-50"  wire:loading.attr="disable">Save</button>

<div class="loader" wire:loading wire:target="title"></div>
<br>
<button wire:loading.remove>Save</button>


<div style="margin-top: 20px;">
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
    {{ $posts->links('custom-pagination-links') }}
</div>

    {{-- Stop trying to control. --}}
</div>
