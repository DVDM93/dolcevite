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
        <div class="container">
            <img src="{{ asset('image/landing.jpg') }}" alt="Snow">
            <a href="{{ route('menu') }}" class="text-decoration-none">
                <button class="btn font-bold hover:bg-pink-500 hover:text-white">Menu</button>
            </a>
          </div>
    </header>
</body>
</html>
