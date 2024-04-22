<x-app-layout>
    <div class="py-12">
        <div class="flex w-full mx-auto sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 xl:grid-cols-7 gap-x-4 px-4">
                @foreach($items as $item)
                    <x-element-item :item="$item" />
                @endforeach
                <article class="create-item-button flex flex-col justify-center items-center bg-white dark:bg-gray-800 shadow-md rounded-lg p-4 mb-4 hover:bg-gray-300/20 w-auto transition">
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
    </div>
</x-app-layout>

<x-modal name="create-item-modal">
    <div class="modal-header justify-center flex align-center py-5">
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Item') }}
        </h1>
    </div>
    <div class="modal-body px-5">
        <x-my-own-input type="text" name="Name" id="name" required="required" />
        <x-my-own-input type="text" name="Description" id="description" required="required" />
        <x-my-own-input type="text" name="Price" id="price" required="required" />
        <x-my-own-select name="Category" id="category" :options="$categories" text="Select Category" required="required" />
        <x-my-own-input type="file" name="Image" id="image" required="required" />
</div>
    <div class="modal-footer justify-center flex align-center py-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded store-item-button" type="submit">{{__('Create Item')}}</button>
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
            <x-my-own-input type="file" name="Image" id="edit-item-image" required="required" />
    </div>
    <div class="modal-footer justify-center flex align-center py-5">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{{__('Edit Item')}}</button>
    </div>
</x-modal>