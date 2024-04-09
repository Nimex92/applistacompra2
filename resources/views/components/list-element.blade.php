<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="flex justify-between items-center">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $category->name }}
        </h1>
        <div class="flex items-center space-x-4">
            <button data-id="{{$category->id}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded edit-category">
                {{ __('Edit') }}
            </button>
            <button data-id="{{$category->id}}" type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded delete-category">
                {{ __('Delete') }}
            </button>
        </div>
    </div>
</div>