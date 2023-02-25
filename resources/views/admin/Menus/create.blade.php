<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white text-3xl font-extrabold"> Menu </a>
            </div>

            <div class="m-2 p-2">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700"> Nome </label>
                            <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition">
                        </div>
                        <div class="sm:col-span-6 mt-4">
                            <label for="title" class="block text-sm font-medium text-gray-700"> Immagine </label>
                            <input type="file" id="image" wire:model="newImage" name="title" class="block w-full transition">
                        </div>
                        <div class="sm:col-span-6 mt-4">
                            <label for="body" class="block text-sm font-medium text-gray-700"> Descrizione </label>
                            <div class="mt-1">
                                <textarea name="" id="body" cols="100" rows="10" wire:model.lazy="body" class="shadow-sm focus:ring-indigo-500"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="px-4 py-2 mt-4 bg-blue-500 hover:bg-blue-300 rounded-lg text-white font-extrabold text-xl"> Aggiungi </button>

                    </form>
                </div>
            </div>


        </div>
    </div>
</x-admin-layout>
