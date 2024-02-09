<!-- In your Livewire component Blade file -->
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

<div>
    {{-- In work, do what you enjoy. --}}

    <h1><strong>{{ $welcomeText }}</strong></h1>

    @if($course)
    <h1>{{ $course->title }}</h1>
    <h2>{{ $course->type }}</h2>
    <h2>{{ $course->user_id }}</h2>
    @endif

    <button wire:click="resetProperties"> ریست مقادیر متغیر ها</button>
</div>
