<div class="banner">
    <div class="container">
        <!-- banner Slider starts Here -->
        <script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
        </script>
        <!--//End-slider-script-->
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="banner-info">
                        <h1>Job Searching Just Got So Easy</h1>
                        <p>Consectetur adipisicing elit, sed do lorem ipsum dolor sit amet,  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut .</p>
                    </div>
                </li>
                <li>
                    <div class="banner-info">
                        <h1>Tempor incididunt ut labore</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut .</p>
                    </div>
                </li>
                <li>
                    <div class="banner-info">
                        <h1>Consectetur adipisicing elit</h1>
                        <p>Eiusmod tempor incididunt lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <!-- banner Slider Ends Here -->
    </div>
</div>
<!-- banner -->
<!-- our -->
<div class="our">
    <div class="container">
        <h5>our process</h5>
        <h2>How We Work for you?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <div class="our-top">
            <div class="col-md-4 our-left">
                <i class="best"></i>
                <h3>Searching for the best job</h3>
                <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
            </div>
            <div class="col-md-4 our-left">
                <i class="resu"></i>
                <h3>Searching for the best job</h3>
                <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
            </div>
            <div class="col-md-4 our-left">
                <i class="interv"></i>
                <h3>Searching for the best job</h3>
                <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- our -->