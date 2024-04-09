<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Category') }}
            </h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded create-category">
                {{ __('Create Category') }}
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($categories as $category)
                    {{-- Create an html item element with card style than shows name an a edit delete button --}}
                    <x-list-element :category="$category" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<x-modal name="create-category-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Category') }}
        </h1>
    </div>
    <div class="modal-body px-5">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Name')}}</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="modal-footer justify-center flex align-center py-5">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{__('Create Category')}}</button>
            </div>
        </form>
    </div>
</x-modal>

<x-modal name="edit-category-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Category') }}
        </h1>
    </div>
    <div class="modal-body px-5">
            <div class="mb-4">
                <label for="editNameInput" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Name')}}</label>
                <input type="text" name="name" id="editNameInput" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="modal-footer justify-center flex align-center py-5">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded update-category" type="submit">{{__('Update Category')}}</button>
            </div>
    </div>
</x-modal>

<x-modal name="delete-category-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Delete Item') }} 
        </h1>
    </div>
    <div class="modal-body px-5">
        <p class="text-white justify-center flex align-center">{{__('Are you sure you want to delete this item?')}}</p>
        <div class="modal-footer justify-center flex align-center py-5">
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded submit-delete-category" type="submit">{{__('Delete Category')}}</button>
        </div>
    </div>
</x-modal>

<x-popup-notification />