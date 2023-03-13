<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7d13dd75fb.js" crossorigin="anonymous"></script>

    @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/app.css'])

    <title>Document</title>
</head>

<body class="bodyclass">


    <div class="card mb-4">
        <div class="top">
            <div class="details">
                <div class="profile-img">
                    <img src="{{ asset('image/logo-DV.png') }}" alZt="" class="cover">
                </div>
                <h3> DolceVite <br> <span>Ibiza, Spain</span></h3>
            </div>
            <img src="{{ asset('image/64576.png') }}" alt="" class="w-3 h-3">
        </div>
        <div class="imgBx">
            <img src="{{ asset('image/io.jpg') }}" alt="" class="cover2">
        </div>
        <div class="actionBtns">
            <div class="left">
                <i class="fas fa-heart text-red-600" id="heart-icon"></i>
                <i class="fa-regular fa-comment"></i>
                <i class="fa-regular fa-paper-plane"></i>
            </div>
            <div class="right">
                <i class="fa-regular fa-bookmark"></i>
            </div>
        </div>
        <h4 class="likes"> 3,668 likes </h4>
        <h4 class="message"> <b> DolceVite </b> la mia patong <span> #ibiza #dolcevite #2023</span></h4>
        <h4 class="comments"> View all 245 comments</h4>
        <div class="addComments">
            <div class="userImg">
                <img src="{{ asset('image/io.jpg') }}" alt="" class="cover ">
            </div>
            <input type="text" class="text" placeholder="Add a comment.....">
        </div>
        <h5 class="postTime"> 3 hours ago</h5>
    </div>





</body>

</html>
