<div>
    {{-- The Master doesn't talk, he acts. --}}

    User:
    <select wire:model="selectedUser">
        @foreach($user_ids as $index => $user)
            <option value="{{ $index }}">{{ $user }}</option>
        @endforeach
    </select>
    <br>

    Task:
    <input type="text" wire:model="task">
    <br>

    <button wire:click="save">Add New Task</button>

    <hr>
    Tasks of user: {{ $userTaskes }}
</div>
