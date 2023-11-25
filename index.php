<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="./css/index.css">

</head>

<body>
    <?php include 'header.php' ?>
    <section>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide home">
                    <div class="home-text">
                        <h1>Explore, Host, and Sell Event Tickets in Ghana</h1>
                        <p>Enhance your event enjoyment with Natickets.</p>
                        <div class="home-button">
                            <button class="event-btn"><a href="">Create an event</a></button>
                            <button class="buy-btn"><a href="">Explore events</a></button>
                        </div>
                    </div>
                    <img src="./images/home.jpg" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section>
        <div class="trust-bg">
            <div class="brands">
                <div class="brands-title">
                    <h3>Trusted by:</h3>
                </div>
                <div class="brands-logo">
                    <!-- Swiper -->
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide brandss">
                                <img src="./images/blackstarline.png" alt="">
                            </div>
                            <div class="swiper-slide brandss">
                                <img src="./images/globalcitizenfestival.png" alt="">
                            </div>
                            <div class="swiper-slide brandss">
                                <img src="./images/goldcoastreport.png" alt="">
                            </div>
                            <div class="swiper-slide brandss">
                                <img src="./images/manifestivities.png" alt="">
                            </div>
                            <div class="swiper-slide brandss">
                                <img src="./images/accessbank.png" alt="">
                            </div>
                            <div class="swiper-slide brandss">
                                <img src="./images/tidalrave.png" alt="">
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'todays_events.php'?>

    <script src="./js/home.js"></script>
    <script src="./js/brands.js"></script>
</body>

</html>