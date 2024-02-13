<div>
    {{-- Do your work, then step back. --}}
    <div wire:poll.10s>
    Subscribers: {{ $count }}
    </div>

    <div wire:poll>
    {{now()}}
    </div>

    <div wire:poll.3s="changeColor">
    <span style="{{ $clockColor ? 'color: blue;' : 'color: red;' }}">
    {{ now() }}
    </span>
    </div>


    <div wire:poll.keep-alive>
    {{now()}}
    </div>

    <div wire:offline>
        شما افلاین شدید
    </div>

    <div wire:offline.remove>
        شما انلاین  شدید
    </div>


    <button wire.affline.attr="disable"> بازی کنید</button>


    </span>

    <hr>


    <nav>
    <a href="/loader" wire:navigate>loader</a>
    <a href="/html" wire:navigate>html</a>
    <a href="/upload" wire:navigate.hover>post with image</a>
    <a href="/post" wire:navigate>posts</a>
</nav>


<hr>
<button wire:click="changeColor"
wire:confirm="Are you sure you want to change color?"

> change color</button>
    <span style="{{ $clockColor ? 'color: green;' : 'color: violet;' }}">
     confirm 
    </span>


<hr>
<button wire:click="$set('showPosts', true)">Show comments</button>
 
    @if ($showPosts)
        <div style="margin-top: 20px;" wire:transition.opacity.duration.5000ms	> 
            <h2>All Posts:</h2>
            @foreach($posts as $post) 
                <div style="background-color: #f0f0f0; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                </div>
            @endforeach
        </div>
    @endif

    <div wire:init>
        print init
    </div>

</div>
