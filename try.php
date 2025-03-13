<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Moving Cards with Swiper.js</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .swiper {
            width: 80%;
            padding: 20px;
        }
        .swiper-slide {
            width: 250px; /* Fixed width for card */
            height: 150px;
            background: #007aff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Card 1</div>
            <div class="swiper-slide">Card 2</div>
            <div class="swiper-slide">Card 3</div>
            <div class="swiper-slide">Card 4</div>
            <div class="swiper-slide">Card 5</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, // Infinite loop
            slidesPerView: "auto", // Show multiple cards at once
            spaceBetween: 20, // Space between cards
            speed: 4000, // Smooth scrolling speed
            autoplay: {
                delay: 0, // No delay, continuous movement
                disableOnInteraction: false,
            },
            freeMode: true, // Allows smooth continuous scrolling
        });
    </script>

</body>
</html>
