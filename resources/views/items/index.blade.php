<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Items') }}
            </h1>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded create-item-button" >
                {{ __('Create Item') }}
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($items as $item)
                    <x-element-item :item="$item" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<x-modal name="create-item-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Item') }}
        </h1>
    </div>
    <div class="modal-body px-5">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Name')}}</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Description')}}</label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Price')}}</label>
                <input type="text" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="MB-4">
                <label for="category" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">{{__('Category')}}</label>
                <select name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:text-gray-300 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="" disabled selected>{{__('Select Category')}}</option>
                    @if($categories->count())
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            
        </form>
    </div>
    <div class="modal-footer justify-center flex align-center py-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{__('Create Item')}}</button>
    </div>
</x-modal>

<x-modal name="edit-item-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Item') }}
        </h1>
    </div>
    <div class="modal-body px-5">
            <x-my-own-input type="text" name="Name" id="edit-item-name" required="required" />
            <x-my-own-input type="text" name="Description" id="edit-item-description" required="required" />
            <x-my-own-input type="text" name="Price" id="edit-item-price" required="required" />
            <x-my-own-select name="Category" id="edit-item-category" :options="$categories" text="Select Category" required="required" />
    </div>
    <div class="modal-footer justify-center flex align-center py-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{__('Edit Item')}}</button>
    </div>
</x-modal>