<div>
    {{-- Display course title --}}
  name :   <h4>{{ $course->title }}</h4>

    {{-- Display and bind input_test --}}
    <h2>{{ $input_test }}</h2>
    wire model test: <input type="text" wire:model.live="input_test"> 


<!-- تا زمانی که از باکس بیرون نبومدیم اعمال نمیشه -->
    <input type="text" wire:model.blur="input_test">

<!-- میگه بعد از چند ثانیه بیاد برای ما اعمال بشه -->
    <input type="text" wire:model.live.debounce.10000ms="input_test">

<!-- ببین این میاد اعتبارسنجی هم میگه زمان انتخاب مثل بلار هست ولی اعتبرسنجی هم داره -->
    <select wire:model.change="input_test">

</div>
