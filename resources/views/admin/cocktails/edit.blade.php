<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex m-2 p-2">
                <a href="{{ route('admin.cocktails.index') }}" class="px-4 py-2 mb-2 text-3xl text-white font-extrabold bg-green-500 hover:bg-green-300 rounded-lg">
                    Cocktails Index
                </a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.desserts.update', $cocktail->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6 mb-2">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Nome </label>
                            <div class="mt-1">
                                <input type="text" id="name" name="name" value="{{ $cocktail->name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image" class="block text-sm font-medium text-gray-700 mt-3"> Immagine </label>
                            <div>
                                <img src="{{ Storage::url($cocktail->image) }}" alt="" class="w-10 h-10">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image" name="image"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('image')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price" class="block text-sm font-medium text-gray-700 mt-3"> Prezzo </label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price" value="{{ $cocktail->price }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('price')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Descrizione</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" name="description"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                {{ $cocktail->description }}
                            </textarea>
                            </div>
                            @error('description')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body2" class="block text-sm font-medium text-gray-700">Descrizione 2</label>
                            <div class="mt-1">
                                <textarea id="body2" rows="3" name="description2"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    {{ $cocktail->description2 }}
                                </textarea>
                            </div>
                            @error('description2')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body3" class="block text-sm font-medium text-gray-700">Descrizione 3</label>
                            <div class="mt-1">
                                <textarea id="body3" rows="3" name="description3"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    {{ $cocktail->description3 }}
                                </textarea>
                            </div>
                            @error('description3')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white font-bold text-xl">Aggiungi</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-admin-layout>
