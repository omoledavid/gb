<div class="mainslider">
    <div id="myCarousel" class="carousel slide">
        <!-- Carousel items -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="active item">
                <img src="{{ asset($activeTemplateTrue. 'home/images/2024Sliders-PERSONAL_LOAN_WEBSITE_1920_X_650-03.jpg')}}" alt="" title="" />
            </div>
            <div class="item">
                <img src="{{ asset($activeTemplateTrue. 'home/images/2024-Breast-Cancer-Awareness_Slider.jpg')}}" alt="" title="" />
                <a target="_blank" class="owl-slide-ext-link" href="#"></a>
            </div>
            <div class="item">
                <img src="{{ asset($activeTemplateTrue. 'home/images/2023-WEBSITE_MOBILE_APP1.png')}}" alt="" title="" />
            </div>
            <div class="item">
                <img src="{{ asset($activeTemplateTrue. 'home/images/slideshow-1920_X_640_VER_01_copy.jpg')}}" alt="" title="" />
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
    </div>

    <script>
        //<![CDATA[
        jQuery(function ($) {
            $(".carousel").carousel({
                interval: 15000,
                pause: "hover",
            });
        });
        //]]>
    </script>

    <div class="header__kicker-ticker">
        <div class="tickerInfo"></div>
    </div>
</div>
