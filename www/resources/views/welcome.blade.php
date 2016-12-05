<!DOCTYPE html>
<html>
<head>
    <title>SweetPrices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <!--Custom Theme files-->
{{ Html::style('css/bootstrap.min.css') }}
{{ Html::style('css/template/style.css') }}
{{ Html::style('css/template/index.css') }}
{{ Html::style('css/template/swipebox.css') }}
<!--//Custom Theme files-->
    <!--js-->
    {{ Html::script('js/template/jquery-1.11.1.min.js') }}
    <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
    <script>
        var socket = io(':6001')
    </script>
    <!--//js-->
    <!--web-fonts-->

    <link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
    <!--start-smooth-scrolling-->
    {{ Html::script('js/template/move-top.js') }}
    {{ Html::script('js/template/easing.js') }}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--//end-smooth-scrolling-->
</head>
<body>
<!--banner-->
<div class="banner">
    <div class="header"><!--header-->
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="{{ url('/') }}">SweetPrices</a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="#categories" class="scroll">Categories</a></li>
                        <li><a href="#about" class="scroll">About</a></li>
                        <li><a href="#features" class="scroll">Features</a></li>
                        <li><a href="#contact" class="scroll">Contact Us</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>

    </div>
    <!--//header-->
    <!--banner-text-->
    <div class="banner-text">
        <!--banner Slider starts Here-->
        {{ Html::script('js/template/responsiveslides.min.js') }}
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 3
                $("#slider3").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: false,
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
            <ul class="rslides" id="slider3">
                <li>
                    <h3>Make purchases quickly</h3>
                    <p>The "SweetPrices" contains all household appliances.</p>
                    <a class="more hvr-bounce-to-right" href="{{ route('login') }}">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
    <!--//banner-text-->
</div>
<!--//banner-->
<!--about-->
<div id="about" class="about">
    <div class="container">
        <div class="title">
            <h3>About Us </h3>
            <p>SweetPrices will help us to quickly and easily select your favorite shopping.</p>
        </div>
        <div class="about-row">
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
                <h4>1. Sign In</h4>
                <p>Authorize in account by login and pass.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h4>2. Order</h4>
                <p>Create an order from your account.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span>
                <h4>3. Confirmation</h4>
                <p>Wait the order confirmation by the manager.</p>
                <h6> </h6>
            </div>
            <div class="col-md-3 about-grids">
                <span class="glyphicon glyphicon-stats effect-1" aria-hidden="true"></span>
                <h4>4. Efficiency</h4>
                <p>Increase your efficiency by saving the time to take order.</p>
                <h6> </h6>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
<!--categories-->
<div id="categories" class="categories">
    <div class="container">
        <div class="title">
            <h3>Categories </h3>
            <p>All categories of the products.</p>
        </div>
        <div class="about-row">
            <div class="col-md-4 about-grids">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>1. First</h4>
                <h5> Кухонные плиты</h5>

            </div>
            <div class="col-md-4 about-grids">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>2. Second</h4>
                <p>
                <h5>Холодильники</h5>

                </p>
                <h6> </h6>
            </div>
            <div class="col-md-4 about-grids">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>3. Third</h4>
                <p>
                <h5>Вентиляторы</h5>
                </p>
                <h6> </h6>
            </div>
            <div class="col-md-4 about-grids">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>4. Fourth</h4>
                <p>
                <h5>Ноутбуки</h5>
                </p>
                <h6> </h6>
            </div>
            <div class="col-md-4 about-grids">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>5. Fifth</h4>
                <p>
                <h5>Телефоны</h5>
                </p>
                <h6> </h6>
            </div>
            <div class="col-md-4 about-grids categories-grids-mdl">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
                <h4>6. Sixth</h4>
                <p>
                <h5>Планшеты</h5>
                </p>
                <h6> </h6>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//categories-->
<!--features-->
<div id="features" class="features">
    <div class="container">
        <div class="title">
            <h3>Features</h3>
        </div>
        <div class="features-row">
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Orders Done</h4>
                    <h5>10 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                </div>

            </div>
            <div class="col-md-4 features-grids features-grids-mdl">
                <div class="features-left">
                    <h4>Visitors</h4>
                    <h5>30 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="col-md-4 features-grids">
                <div class="features-left">
                    <h4>Products</h4>
                    <h5>100 </h5>
                </div>
                <div class="features-right">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </div>
                <div class="clerfix"> </div>
            </div>
            <div class="clerfix"> </div>
        </div>
    </div>
</div>
<!--//features-->
<!--contact-->
<div class="contact" id="contact">
    <div class="container">
        <div class="title">
            <h3>Contact</h3>
            <p>We encourage you to share your ideas and improvements with us.
                Please see the contact information. If you still don’t see what you’re looking for, please contact our support.
            </p>
        </div>
        <div class="contact-grids">
            <div class="col-md-5 address">
                <h4>Contact Info</h4>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Visit Us</h5>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Mail Us</h5>
                        <p><a href="mailto:andre.war@mail.ru"> andre.war@mail.ru</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 address-right">
                        <h5>Call Us</h5>
                        <p>+375 29 105 80 88</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="First Name" required="">
                    <input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
                    <input type="text" name="Number" placeholder="Mobile Number" required="">
                    <input class="email" name="Email" type="text" placeholder="Email" required="">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-left">
            <p>© 2016, SweetPrices. All rights reserved</p>
        </div>
    </div>
</div>
<!--//footer-->
<!--smooth-scrolling-of-move-up-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--//smooth-scrolling-of-move-up-->
<!-- Include jQuery & Filterizr -->
{{ Html::script('js/template/jquery.filterizr.js') }}
{{ Html::script('js/template/controls.js') }}
<!-- swipe box js -->
{{ Html::script('js/template/jquery.swipebox.min.js') }}
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->
<!--search jQuery-->
{{ Html::script('js/template/main.js') }}
<!--//search jQuery-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ Html::script('js/bootstrap.min.js') }}
</body>
</html>