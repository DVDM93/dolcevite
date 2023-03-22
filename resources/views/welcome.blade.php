<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/app.css'])

    <title>Dolcevite</title>
</head>

<body>

    <header class="mainBg">
        <div class="container flex justify-center">
            <img src="{{ asset('image/landing.jpg') }}" alt="Copertina DV">
        </div>
    </header>


    <div class="container-fluid mainBg">

        <div class="container bgHippie">

            {{-- Antipasti --}}
            <div class="container flex flex-col">
                @foreach ($starters as $starter)
                    <div class="row justify-center mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName"> {{ $starter->name }} <span> {{ $starter->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2">{{ $starter->description }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $starter->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 mb-2">{{ $starter->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.starters.show', $starter->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($starter->image) }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
                @foreach ($rimolis as $rimoli)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.rimolis.show', $rimoli->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($rimoli->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName ms-3"> {{ $rimoli->name }} <span>
                                    {{ $rimoli->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $rimoli->description }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $rimoli->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3 mb-2">{{ $rimoli->description3 }}</p>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-4">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory"> antipasti </h3>
                    </div>
                </div>
            </div>

            {{-- Primi Piatti --}}
            <div class="container flex flex-col">
                @foreach ($mainDishes as $mainDish)
                    <div class="row justify-center mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName"> {{ $mainDish->name }} <span>
                                    {{ $mainDish->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2">{{ $mainDish->description }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $mainDish->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 mb-2">{{ $mainDish->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.main_dishes.show', $mainDish->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($mainDish->image) }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center p-4">
                            <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory"> primi piatti </h3>
                        </div>
                    </div>
                </div>

            </div>

            {{-- SECONDI --}}
            <div class="container flex flex-col">
                @foreach ($secondDishes as $secondDish)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.second_dishes.show', $secondDish->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($secondDish->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $secondDish->description }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $secondDish->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3 ">{{ $secondDish->description3 }}</p>
                            <h6 class="text-red-500 pb-1 fontName ms-3 mb-4"> {{ $secondDish->name }} <span>
                                    {{ $secondDish->price }}
                                </span> <span> € </span> <span
                                    class="lead fontSizeSubprice text-black">{{ $secondDish->subprice }}</span></h6>
                        </div>
                    </div>
                @endforeach
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center p-4">
                            <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory"> secondi </h3>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PIZZE ROSSE --}}
            <div class="container flex flex-col">
                <div class="col-12 d-flex justify-end">
                    <ul class=" mb-3 mt-0">
                        <li class="fontSize2"> · Pizze con miscela di farine Petra 0 e Petra integrale </li>
                        <li class="fontSize2"> · Maturazione dell’impasto garantita minimo 72 ore </li>
                    </ul>
                </div>
                @foreach ($redPizzas as $redpizza)
                    <div class="row justify-center mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName"> {{ $redpizza->name }} <span>
                                    {{ $redpizza->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2">{{ $redpizza->description }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $redpizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 mb-2">{{ $redpizza->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.red_pizzas.show', $redpizza->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($redpizza->image) }}" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center p-4">
                            <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory2"> pizze rosse </h3>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PIZZE BIANCHE --}}
            <div class="container flex flex-col">
                <div class="col-12 d-flex justify-end">
                    <ul class=" mb-3 mt-0">
                        <li class="fontSize2"> · Pizze con miscela di farine Petra 0 e Petra integrale </li>
                        <li class="fontSize2"> · Maturazione dell’impasto garantita minimo 72 ore </li>
                    </ul>
                </div>
                @foreach ($whitePizzas as $whitePizza)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.white_pizzas.show', $whitePizza->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($whitePizza->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName ms-3"> {{ $whitePizza->name }} <span>
                                    {{ $whitePizza->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $whitePizza->description }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $whitePizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3 mb-2">{{ $whitePizza->description3 }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-2 mb-2">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory2"> pizze bianche </h3>
                    </div>
                </div>
            </div>

            {{-- PIZZE SPECIALI --}}
            <div class="container flex flex-col">
                <div class="col-12 d-flex justify-end">
                    <ul class=" mb-3 mt-0">
                        <li class="fontSize2"> · Pizze con miscela di farine Petra 0 e Petra integrale </li>
                        <li class="fontSize2"> · Maturazione dell’impasto garantita minimo 72 ore </li>
                    </ul>
                </div>
                @foreach ($specialPizzas as $specialPizza)
                    <div class="row justify-center mt-2">
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName"> {{ $specialPizza->name }} <span>
                                    {{ $specialPizza->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2">{{ $specialPizza->description }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $specialPizza->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 mb-2">{{ $specialPizza->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.special_pizzas.show', $specialPizza->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($specialPizza->image) }}"
                                        alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-4">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory2"> pizze speciali </h3>
                    </div>
                </div>
            </div>

            {{-- NEWS --}}
            <div class="container flex flex-col">
                @foreach ($newEntries as $newEntry)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.new_entries.show', $newEntry->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($newEntry->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName ms-3"> {{ $newEntry->name }} <span>
                                    {{ $newEntry->price }}
                                </span> <span> € </span></h6>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $newEntry->description }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $newEntry->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-3 mb-2">{{ $newEntry->description3 }}</p>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-4">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory2"> news 2023 </h3>
                    </div>
                </div>
            </div>

            {{-- DESSERTS --}}
            <div class="container flex flex-col">
                @foreach ($desserts as $dessert)
                    <div class="row mt-2">
                        <div class="col-9">
                            <p class="lead text-red-500 fontSize font-medium pb-2">{{ $dessert->name }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $dessert->description }}</p>
                            <p class="lead fontSize font-medium pb-2">{{ $dessert->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 mb-3">{{ $dessert->description3 }}</p>
                        </div>
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.desserts.show', $dessert->id) }}">
                                    <img class="mb-5" src="{{ Storage::url($dessert->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-2">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory"> dessert </h3>
                    </div>
                </div>
            </div>

            {{-- COCKTAILS --}}
            <div class="container flex flex-col">
                @foreach ($cocktails as $cocktail)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.cocktails.show', $cocktail->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($cocktail->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <h6 class=" font-semibold pb-1 fontSize ms-2"> {{ $cocktail->name }} <span class="text-red-500">
                                    {{ $cocktail->price }}
                                </span> <span class="text-red-500"> € </span></h6>
                            <p class="lead fontSize font-medium pb-2 ms-2">{{ $cocktail->description }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-2">{{ $cocktail->description2 }}</p>
                            <p class="lead fontSize font-medium pb-2 ms-2 mb-2">{{ $cocktail->description3 }}</p>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center p-4">
                        <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory2"> cocktails </h3>
                    </div>
                </div>
            </div>

            {{-- VINO --}}
            <div class="container flex flex-col">
                @foreach ($vinos as $vino)
                    <div class="row justify-center mt-2">
                        <div class="col-3">
                            <div class="frontCard">
                                <a href="{{ route('details.vinos.show', $vino->id) }}">
                                    <img class="mb-3" src="{{ Storage::url($vino->image) }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <h6 class="text-red-500 pb-1 fontName ms-3"> {{ $vino->name }}</h6>
                            <p class="lead fontSize font-medium pb-2 ms-3 text-red-500">{{ $vino->price }} <span> €  </span> <span class="text-black">{{ $vino->subprice }}</span></p>                            
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $vino->description }}</p>                            
                            <p class="lead fontSize font-medium pb-2 ms-3">{{ $vino->description2 }}</p>                            
                        </div>
                    </div>
                @endforeach
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center p-4">
                            <h3 class=" font-bold text-slate-500 mb-3 fontSizeCategory"> vini </h3>
                        </div>
                    </div>
                </div>
            </div>


        </div> {{-- chiusura container hippie --}}

    </div> {{-- chiusura container-fluid --}}

</body>

</html>
