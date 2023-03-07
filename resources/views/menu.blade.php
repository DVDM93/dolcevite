<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>cuihjg</h1>
    @foreach ($starters as $starter)
        <p>{{ $starter->name }}</p>
    @endforeach
    @foreach ($mainDishes as $mainDish)
    <p>{{ $mainDish->name }}</p>
@endforeach


</body>
</html>
