<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white text-3xl font-extrabold"> Categorie</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.categories.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6 rounded">
                            <label for="name" class="block text-sm  text-gray-700 mb-4 font-extrabold"> Nome Categoria </label>
                            <input type="text" id="name" name="name" value="{{ $category->name }}" class="block w-full transition mb-4">
                        </div>
                        <div class="sm:col-span-6 mt-4">
                            <label for="image" class="block text-sm font-extrabold text-gray-700 mb-4"> Immagine </label>
                            <div>
                                <img src="{{ Storage::url($category->image) }}" alt="" class="w-32 h-32 mb-4">
                            </div>
                            <input type="file" id="image" name="image" class="block w-full transition rounded">
                        </div>
                        <div class="sm:col-span-6 mt-4 mb-4">
                            <label for="description" class="block text-sm font-extrabold text-gray-700"> Descrizione </label>
                            <div class="mt-1">
                                <textarea name="description" id="description" cols="100" rows="10" class="shadow-sm rounded focus:ring-indigo-500">
                                    {{ $category->description }}
                                </textarea>
                            </div>
                        </div>

                        <button type="submit" class="px-4 py-2 mt-4 bg-blue-500 hover:bg-blue-300 rounded-lg text-white font-extrabold text-xl"> Aggiorna </button>

                    </form>
                </div>
            </div>


        </div>
    </div>
</x-admin-layout>
