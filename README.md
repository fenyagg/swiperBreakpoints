# swiperBreakpoints
Добавлен параметр <b>breakpoints</b>.<br> 
На каждую ширину экрана плагин применяет свои параметры.

Пример использования нового параметра:


script.js:
```js
$(function() {
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters          
        autoplay: false,        
        freeMode: false,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',

        // And if we need scrollbar
        scrollbar: '.swiper-scrollbar',
        
        //object params for each breakpoint
        breakpoints: {
    	  	320: {
    	  		slidesPerView: 1
    	  	},
    	  	480: {
    	  		slidesPerView: 2
    	  	},
    	  	768: {
    	  		slidesPerView: 3
    	  	},
    	  	992: {
    	  		slidesPerView: 4
    	  	},
    	  	1280: {
    	  		slidesPerView: 5
    	  	}
        }
    });   
});
```
html:
```html
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
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
```
