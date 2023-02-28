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

    <header>
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-12 d-flex justify-center align-middle">
                    <img src="{{ asset('image/landing.jpg') }}" class="justify-content-center img-fluid" alt="">
                </div>
            </div>
        </div>
    </header>

</body>
</html>
