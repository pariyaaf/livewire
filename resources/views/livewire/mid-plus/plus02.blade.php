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


    <div wire:offline.remove>
        شما انلاین  شدید
    </div>

    <button wire.affline.attr="disable"> بازی کنید</button>



    <button wire:click="changeColor"></button>
    <span style="{{ $clockColor ? 'color: blue;' : 'color: red;' }}">
     prefetch 
    </span>
</div>
