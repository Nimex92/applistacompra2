@props([
    'disabled' => false,
    'id' => '',
    'options' => null,
    'selected' => null,
    'text' => null,
    'name' => null
])

<div class="mt-4">
    <label for="{{$id ? $id : 'id'}}" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__($name ? $name : null)}}</label>
    <select name="category" id="{{$id ? $id : 'id'}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
        <option value="" {{$disabled ? $disabled : null}} {{$selected ? $selected : null}}>{{__($text ? $text : null)}}</option>
        @if($options->count())
            @foreach($options as $option)
                <option value="{{ $option->id }}">{{ $option->name }}</option>
            @endforeach
        @endif
    </select>
</div>