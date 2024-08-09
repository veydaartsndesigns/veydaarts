<!-----This is the main page----->

<?php

    // session_start();
    // require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Veyda Arts n Designs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="t3cont.css">
    <!-- Link SwiperJs CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/90575e6a68.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="maincontt3">

        <div class="contner3 sbc"></div>

        <div class="contner3 t3hcont">
            <div class="text-align"><h1>Welcome to the Art Gallery!</h1></div>                        

            <div class="t3gallery ggcont swiper">
                <div class="slider-wrapper">
                    <div class="gallerycont swiper-wrapper">
                        <div class="imggcont swiper-slide" id="a1"></div>
                        <div class="imggcont swiper-slide" id="a2"></div>
                        <div class="imggcont swiper-slide" id="a3"></div>
                        <div class="imggcont swiper-slide" id="a4"></div>
                        <div class="imggcont swiper-slide" id="a5"></div>
                        <div class="imggcont swiper-slide" id="a6"></div>
                        <div class="imggcont swiper-slide" id="a7"></div>
                        <div class="imggcont swiper-slide" id="a8"></div>
                        <div class="imggcont swiper-slide" id="a9"></div>
                        <div class="imggcont swiper-slide" id="a10"></div>
                        <div class="imggcont swiper-slide" id="a11"></div>
                        <div class="imggcont swiper-slide" id="a12"></div>
                        <div class="imggcont swiper-slide" id="a13"></div>
                        <div class="imggcont swiper-slide" id="a14"></div>
                        <div class="imggcont swiper-slide" id="a15"></div>
                        <div class="imggcont swiper-slide" id="a16"></div>
                        <div class="imggcont swiper-slide" id="a17"></div>
                        <div class="imggcont swiper-slide" id="a18"></div>
                        <div class="imggcont swiper-slide" id="a19"></div>
                        <div class="imggcont swiper-slide" id="a20"></div>
                        <div class="imggcont swiper-slide" id="a21"></div>
                        <div class="imggcont swiper-slide" id="a22"></div>
                        <div class="imggcont swiper-slide" id="a23"></div>
                        <div class="imggcont swiper-slide" id="a24"></div>
                        <div class="imggcont swiper-slide" id="a25"></div>
                        <div class="imggcont swiper-slide" id="a26"></div>
                        <div class="imggcont swiper-slide" id="a27"></div>
                        <div class="imggcont swiper-slide" id="a28"></div>
                        <div class="imggcont swiper-slide" id="a29"></div>
                        <div class="imggcont swiper-slide" id="a30"></div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>


        </div>

        <div class="contner3 sbc"><a class="logoutbtn" href="logout.php">Logout</a></div>
    

        

    </div>

    <?php
        include 'footer.php';
    ?>

        <!-- Link SwiperJS Js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Link custom script -->
    <script src="../js/script.js"></script>
</body>
</html>