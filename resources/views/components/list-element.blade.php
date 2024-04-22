@props(['category'])

<article class="flex flex-col justify-between items-center bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 mb-4 hover:bg-gray-300/20 w-auto transition">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-4">{{ $category->name }}</h1>
    <div class="flex justify-center items-center gap-x-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2 edit-category text-xs transition" data-id="{{ $category->id }}" data-name="{{ $category->name }}">{{__('Edit')}}</button>
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded delete-category text-xs transition" data-id="{{ $category->id }}">{{__('Delete')}}</button>
    </div>
</article>