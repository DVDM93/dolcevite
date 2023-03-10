<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/app.css'])

    <title>Dolce Vite</title>
</head>

<body>

    <header class="landing">
        <div class="container flex justify-center">
            <img src="{{ asset('image/landing.jpg') }}" alt="Copertina DV">
        </div>
    </header>


    <div class="container-fluid landing">

        <div class="container bgHippie">

            {{-- Antipasti --}}
            <div class="container flex flex-col">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3 "> ANTIPASTI </h3>
                    </div>
                </div>
                @foreach ($starters as $starter)
                    <div class="row justify-center mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $starter->name }} <span> {{ $starter->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $starter->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $starter->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1 mb-4">{{ $starter->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded border border-emerald-500"
                                src="{{ Storage::url($starter->image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Rimoli --}}
            <div class="container mt-3 flex flex-col">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-slate-500 mt-3 mb-3 "> rimoli crunch </h3>
                    </div>
                </div>
                @foreach ($rimolis as $rimoli)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($rimoli->image) }}" alt="">
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $rimoli->name }} <span> {{ $rimoli->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $rimoli->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $rimoli->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $rimoli->description3 }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- Primi Piatti --}}
            <div class="container mt-3 flex flex-col">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3 "> primi piatti </h3>
                    </div>
                </div>
                @foreach ($mainDishes as $mainDish)
                    <div class="row mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $mainDish->name }} <span>
                                    {{ $mainDish->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $mainDish->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $mainDish->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $mainDish->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($mainDish->image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- SECONDI --}}
            <div class="container mt-3 flex flex-col ">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-slate-500 mt-3 mb-3 "> secondi </h3>
                    </div>
                </div>
                @foreach ($secondDishes as $secondDish)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($secondDish->image) }}" alt="">
                        </div>
                        <div class="col-9">
                            <p class="lead fontSize font-medium pb-1">{{ $secondDish->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $secondDish->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $secondDish->description3 }}</p>
                            <h6 class="text-red-500 font-bold pb-1"> {{ $secondDish->price }}
                                <span> € </span>
                            </h6>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- PIZZE ROSSE --}}
            <div class="container mt-3 flex flex-col">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3 "> pizze rosse </h3>
                        <ul class=" mb-3 mt-0">
                            <li class="fontSize2"> · Pizze con miscela di farine Petra 0 e Petra integrale </li>
                            <li class="fontSize2"> · Maturazione dell’impasto garantita minimo 72 ore </li>
                        </ul>
                    </div>
                </div>
                @foreach ($redPizzas as $redPizza)
                    <div class="row mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $redPizza->name }} <span>
                                    {{ $redPizza->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $redPizza->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $redPizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $redPizza->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($redPizza->image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- PIZZE BIANCHE --}}
            <div class="container mt-3 flex flex-col ">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-slate-500 mt-3 mb-3 "> pizze bianche </h3>
                    </div>
                </div>
                @foreach ($whitePizzas as $whitePizza)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($whitePizza->image) }}" alt="">
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $whitePizza->name }}
                                <span>{{ $whitePizza->price }}
                                </span> <span> € </span>
                            </h6>
                            <p class="lead fontSize font-medium pb-1">{{ $whitePizza->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $whitePizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $whitePizza->description3 }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- PIZZE SPECIALI --}}
            <div class="container mt-3 flex flex-col">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3 "> pizze speciali </h3>
                        <ul class=" mb-3 mt-0">
                            <li class="fontSize2"> · Pizze con miscela di farine Petra 0 e Petra integrale </li>
                            <li class="fontSize2"> · Maturazione dell’impasto garantita minimo 72 ore </li>
                        </ul>
                    </div>
                </div>
                @foreach ($specialPizzas as $specialPizza)
                    <div class="row mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $specialPizza->name }} <span>
                                    {{ $specialPizza->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $specialPizza->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $specialPizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $specialPizza->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($specialPizza->image) }}"
                                alt="">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- NEWS --}}
            <div class="container mt-3 flex flex-col ">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-slate-500 mt-3 mb-3 "> news 2023 </h3>
                    </div>
                </div>
                @foreach ($newEntries as $newEntry)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($newEntry->image) }}"
                                alt="">
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $newEntry->name }} <span>
                                    {{ $newEntry->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-1">{{ $newEntry->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $newEntry->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $newEntry->description3 }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

            {{-- DESSERTS --}}
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3"> DESSERTS</h3>
                    </div>
                </div>
                @foreach ($desserts as $dessert)
                    <div class="row">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $dessert->name }} <span
                                    class="font-extrabold">
                                    {{ $dessert->price }}
                                </span> <span> € </span> </h6>
                            <p class="lead fontSize font-medium pb-1">{{ $dessert->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $dessert->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1 mb-3">{{ $dessert->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($dessert->image) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- COCKTAILS --}}
            <div class="container mt-3 flex flex-col ">
                <div class="row">
                    <div class="col-6">
                        <h3 class=" font-bold text-slate-500 mt-3 mb-3 "> cocktails </h3>
                    </div>
                </div>
                @foreach ($cocktails as $cocktail)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($cocktail->image) }}"
                                alt="">
                        </div>
                        <div class="col-9">
                            <h6 class="text-black font-bold pb-1"> {{ $cocktail->name }} </h6>
                            <p class="lead fontSize font-medium pb-1">{{ $cocktail->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $cocktail->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $cocktail->description3 }}</p>
                            <h6 class="text-red-500 font-bold pb-1 mb-5"> {{ $cocktail->price }} </h6>

                        </div>

                    </div>
                @endforeach
            </div>

            {{-- Vino --}}
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <h3 class=" font-bold text-red-500 mt-3 mb-3"> bottiglie vino</h3>
                    </div>
                </div>
                @foreach ($vinos as $vino)
                    <div class="row">
                        <div class="col-9">
                            <h6 class="text-red-500 font-bold pb-1"> {{ $vino->name }} </h6>
                            <p class="lead fontSize font-medium pb-1">{{ $vino->description }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $vino->description2 }}</p>
                            <p class="lead fontSize font-medium pb-1">{{ $vino->description3 }}</p>
                            <h6 class="text-red-500 font-bold pb-1 mb-3"> {{ $vino->price }} <span> € </span> </h6>
                        </div>
                        <div class="col-3">
                            <img class="w-14 h-14 rounded" src="{{ Storage::url($vino->image) }}" alt="">
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



</body>

</html>
