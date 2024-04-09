@props([
    'disabled' => false,
    'required' => false,
    'id' => '',
    'type' => 'text',
    'name' => ''
]);
<div>
    <label for="{{$id ? $id : ''}}" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__($name)}}</label>
    <input type="{{$type ? $type : 'text'}}" name="{{$id ? $id : ''}}" id="{{$id ? $id : ''}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" {{$required ? $required : ''}}{{$disabled ? $disabled : ''}}>
</div>