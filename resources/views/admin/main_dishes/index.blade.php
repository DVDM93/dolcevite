<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.main_dishes.create') }}"
                    class="px-4 py-2 mb-2 text-3xl text-white font-extrabold bg-green-500 hover:bg-green-300 rounded-lg">
                    +
                </a>
            </div>


            {{-- Table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Immagine
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descrizione
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Descrizione 2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descrizione 3
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Modifica / Elimina
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mainDishes as $mainDish)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate truncate-words-3">
                                    {{ $mainDish->name }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <img src="{{ Storage::url($mainDish->image) }}" alt="" class="w-10 h-10 rounded">
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white d-inline-block text-truncatee" style="max-width: 230px">
                                    {{ $mainDish->description }}
                                </th>
                                {{-- <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white truncate truncate-words-3">
                                    {{ $mainDish->description2 }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $mainDish->description3 }}
                                </th> --}}
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $mainDish->price }}
                                </th>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.main_dishes.edit', $mainDish->id) }}"
                                            class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                            Modifica </a>
                                        <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                            action="{{ route('admin.main_dishes.destroy', $mainDish->id) }}"
                                            method="POST" onsubmit="return confirm('Confermi?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"> Elimina </button>
                                        </form>
                                    </div>
                                </th>

                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
