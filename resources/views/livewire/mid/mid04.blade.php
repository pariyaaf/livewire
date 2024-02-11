<div>
    {{-- The Master doesn't talk, he acts. --}}
    <h1>{{$word}}</h1>
    <input type="text" wire:model.live="word" style="display: block; margin-bottom: 10px; padding: 8px; width: 100%;">
    @error('word') 
    {{$message}}
    @enderror
</div>
