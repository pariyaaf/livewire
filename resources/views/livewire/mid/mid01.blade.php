<div>
    {{-- The Master doesn't talk, he acts. --}}

    User:
    <select wire:model="selectedUser" wire:change="tasksOfUser">
        @foreach($user_ids as $index => $user)
            <option value="{{ $index }}">{{ $user }}</option>
        @endforeach
    </select>
    <br>

    Task:
    <input type="text" wire:model="task">
    <br>

    <button wire:click="{{$editId ? 'updateTask' : 'save'}}">
        {{$editId ? 'edit': 'new task'}}
    </button>

    <hr>
    Tasks of user: 
    @foreach($userTaskes as $id=>$task)
    {{$task}}
    <button wire:click="deleteTask({{$id}})">delete</button>
    <button wire:click="goToEdit({{$id}})">edit</button>
    <br>

    @endforeach
</div>
