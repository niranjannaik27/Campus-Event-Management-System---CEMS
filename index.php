<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" href="Images/favicon.ico">
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Swiper -->
    <link rel="stylesheet" href="swiper.min.css">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <!-- Title -->
    <title>Eve P</title>
</head>

<body>
    <div id="home">
    <!-- Connecting to database -->
    <?php include 'partials/dbconnect.php'  ?>  
    <!-- Navigation bar -->
    <?php include 'partials/header.php'  ?>

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="true">
        <div class="carousel-inner">
            <div class="carousel-caption d-none d-md-block">
            <!--h5 class="animate__animated animate__zoomIn" id="ico"><img class="logo" src="Images/gvhgc-removebg-preview.png" alt="logo"></h5-->
                <p class="animate__animated animate__bounceInRight" id="des">An online platform enables students to easily browse,
                 register, and receive updates for on-campus events through a user-friendly online interface.
                </p>
            </div>
            <div class="carousel-item active" data-interval="3000">
                <img src="Images/car-03.jpg" class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="Images/car-02.jpg"
                    class="d-block w-100" alt="Image">
            </div>
            <div class="carousel-item" data-interval="3000">
                <img src="Images/car-01.jpg"
                    class="d-block w-100" alt="Image">
            </div>
        </div>
    </div>
    
    <!-- About -->
    <section id="about">
        <div class="container wow fadeInUp">
            <h2 class="text-center ab">About</h2>
            <p style="text-align: justify;" class="ab"></p>
            <div class="text-center row">
                <div class="col">
                    <p class="pa" style="text-align:justify;padding-top:20px;">Campus Event Management System is a web platform that simplifies organizing college events. 
                    It helps students and faculty manage event creation, registration, schedules, and notifications, ensuring smooth coordination and participation.
                    it simplifies the entire event management process, ensuring smooth coordination and maximum participation.</p>
                </div>
                <div class="col">
                    <!--img src="\Images\PESULOGO.png" alt="pes_img" id="peslogo" style="padding-top:20px;"/-->
                    <img src="Images/PESUNILOG.png" alt="pes_img" id="peslogo" style="padding-top: 20px;" />

                </div>
            </div>
        </div>
    </section>

    <!-- Gallery section (Swiper) -->
    <div class="gal">
        <h3 class="text-center hea">Gallery</h3>
        <div class="swiper-container" id="gallery">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(Images/sw1.jpg)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw2.jpg)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw3.jpg)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw4.png)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw5.jpg)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw6.jpg)">
                </div>
                <div class="swiper-slide" style="background-image:url(Images/sw7.jpg)">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'partials/footer.php'  ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
    });
    </script>

    <script src="swiper.min.js"></script>
    <script>
    var swiper = new Swiper('.swiper-container', {
        speed: 1000,
        direction: 'horizontal',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 5,
            slideShadows: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },

        zoom: true,
        autoplay: {
            delay: 2000,
        },
        loop: true,
    });
    </script>
</body>

</html>