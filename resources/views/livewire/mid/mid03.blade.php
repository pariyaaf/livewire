<div style="max-width: 600px; margin: 0 auto;">
<h1 class="text-center" style="color: {{ $isSuccess ? 'green' : 'orange' }};">{{ $topTitle }}</h1>
    {{-- Because she competes with no one, no one can compete with her. --}}
   <form action="" wire:click="save">
    <!--    <form action="" wire:keydown.enter.prevent="save"> -->
    <input type="text" wire:model="title" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">
        @error('title')
        {{$message}}
        @enderror
<!--     <input type="text" wire:model="title" wire:change="save" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;"> -->
        <textarea name="" id="" cols="30" rows="10" wire:model="content" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;"></textarea>
        @error('content')
        {{$message}}
        @enderror

        <!--         <button type="button" wire:click.stop="$set('topTitle', 'changed')" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">Submit</button> -->
        <button type="button" wire:click.stop="$toggle('isSuccess')" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">Submit</button>
   </form>
   <button type="button" wire:click="$dispatch('showHelp')" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%; background-color: #3490dc; color: #ffffff; border: 1px solid #2779bd; cursor: pointer;">Help</button>

   <div style="margin-top: 20px;">
            <h2>All Posts:</h2>
            @foreach($posts as $post) 
                <div style="background-color: #f0f0f0; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc;">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->content}}</p>
                </div>
            @endforeach
        </div>
        <livewire:mid.mid04/>
</div>