<x-app-layout>

    <div class="py-4">
        <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-x-2 px-4">
                @foreach ($categories as $category)
                    {{-- Create an html item element with card style than shows name an a edit delete button --}}
                    <x-list-element :category="$category" />
                @endforeach
                <article class="create-category flex flex-col justify-center items-center bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 mb-4 hover:bg-gray-300/20 w-auto transition">
                    <svg 
                        class="text-white/40 "
                        xmlns="http://www.w3.org/2000/svg"  
                        width="48"  
                        height="48"  
                        viewBox="0 0 24 24"  
                        fill="none"  
                        stroke="currentColor"  
                        stroke-width="2"  
                        stroke-linecap="round"  
                        stroke-linejoin="round">
                            <title>{{__('Create Category')}}</title>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M9 12h6" />
                            <path d="M12 9v6" />
                    </svg>
                </article>
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