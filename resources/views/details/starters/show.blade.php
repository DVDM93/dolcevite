<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://kit.fontawesome.com/7d13dd75fb.js" crossorigin="anonymous"></script>

    @vite(['resources/js/app.js', 'resources/css/app.scss', 'resources/css/app.css'])

    <title>Insta DV</title>
</head>

<body class="bodyclass">
    <div class="container-fluid bodydiv">
        <div class="card">
            <div class="top">
                <div class="details">
                    <div class="profile-image">
                        <img src="{{ asset('image/logo-DV.png') }}" alt="" class="cover">
                    </div>
                    <h3> ladolceviteibiza <br> <span> Ibiza, Spain </span></h3>
                </div>
                <img src="{{ asset('image/64576.png') }}" alt="" class="w-5 h-5">
            </div>
            <div class="imgBox">
                <img src="{{ Storage::url($starter->image) }}" alt="" class="cover">
            </div>
            <div class="actionBtns">
                <div class="left">
                    <i class="fas fa-heart text-red-600"></i>
                    <i class="fa-regular fa-comment"></i>
                    <i class="fa-regular fa-paper-plane"></i>
                </div>
                <div class="right">
                    <i class="fa-regular fa-bookmark"></i>
                </div>
            </div>
            <h4 class="likes"> 14,993 likes </h4>
            <h4 class="message"> <b> ladolceviteibiza </b> la mia patong <span> #ibiza #dolcevite #2023</span></h4>
            <h4 class="comments"> View all 245 comments</h4>
            <div class="addComments">
                <div class="userImg">
                    <img src="{{ asset('image/io.jpg') }}" alt="" class="cover ">
                </div>
                <p class="lead text"> Add a comment.....</p>
            </div>
            <h5 class="postTime"> 3 hours ago</h5>
        </div>
    </div>    

</body>

</html>
