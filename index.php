<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="template_styles.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/swiper/swiper.jquery.js"></script>
        <link rel="stylesheet" href="js/swiper/swiper.css">
        <script src="js/swiperBreakpoints.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <!-- Slider main container -->
            <div class="swiper-container swiper1">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div><!-- .swiper-container -->
            <script>
                $(function() {
                    var mySwiper = new Swiper ('.swiper1', {
                        // Optional parameters            
                        autoplay: false,        
                        freeMode: false,        //не фиксированная позиция слайдов
                        slidesPerView: 3,         //количество слайдов или "auto"
                        spaceBetween: 20,        //расстояние между слайдами 
            
                        // If we need pagination
                        pagination: '.swiper1 .swiper-pagination',
            
                        // Navigation arrows
                        nextButton: '.swiper1 .swiper-button-next',
                        prevButton: '.swiper1 .swiper-button-prev',
            
                        // And if we need scrollbar
                        scrollbar: '.swiper1 .swiper-scrollbar',

                        breakpoints: {
                            320: {
                                slidesPerView: 2
                            },
                            480: {
                                slidesPerView: 3
                            },
                            768: {
                                slidesPerView: 4,
                                spaceBetween: 150,
                            },
                            1024: {
                                slidesPerView: 5,
                                spaceBetween: 20,
                            },
                            1200: {
                                slidesPerView: 6,
                                spaceBetween: 30,
                            },
                        },
                    });   
                });
            </script>

    
            <br>
            <br>
            <br>
             <!-- Slider main container -->
            <div class="swiper-container swiper2">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                    <div class="swiper-slide"><img src="http://placehold.it/350x150"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div><!-- .swiper-container -->
            <script>
                $(function() {
                    var mySwiper = new Swiper ('.swiper2', {
                        // Optional parameters            
                        autoplay: false,        
                        freeMode: false,        //не фиксированная позиция слайдов
                        slidesPerView: 3,         //количество слайдов или "auto"
                        spaceBetween: 20,        //расстояние между слайдами 
            
                        // If we need pagination
                        pagination: '.swiper2 .swiper-pagination',
            
                        // Navigation arrows
                        nextButton: '.swiper2 .swiper-button-next',
                        prevButton: '.swiper2 .swiper-button-prev',
            
                        // And if we need scrollbar
                        scrollbar: '.swiper2 .swiper-scrollbar',

                        breakpoints: {
                            320: {
                                slidesPerView: 3
                            },
                            480: {
                                slidesPerView: 3
                            },
                            768: {
                                slidesPerView: 4
                            },
                            1024: {
                                slidesPerView: 4
                            },
                            1200: {
                                slidesPerView: 7
                            },
                        },
                    });   
                });
            </script>
            
            

        </div>
        
        
        

       
    </body>
</html>
