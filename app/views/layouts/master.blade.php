<!doctype html>

    <html>

    <head>
        <base href="http://localhost/PHPLarivel/public/">
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/foundation.min.css" type="text/css" rel="stylesheet">
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link href="buttons/foundation_icons_social/stylesheets/social_foundicons.css" type="text/css" rel="stylesheet">
        <link href="buttons/foundation_icons_social/stylesheets/social_foundicons_ie7.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="js/plugins/fancybox/jquery.fancybox.css">
        <link href='http://fonts.googleapis.com/css?family=Bitter&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>



    </head>

    <body onload="hideItems('dd','hide answers')">



    <header>
        <div class="contain-to-grid sticky">
        <nav class="top-bar" id="opTop" data-topbar>
        <ul class="title-area">
        <li class="name"><h1><a href="./"><img src="img/bladeImg/straitLogo44.gif" alt="straitLogo" class="straitLogo" /> </a></h1></li>

            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

            <section class="top-bar-section">
            <ul class="right">

                <li><a href="index.php">Home</a></li>
                <li><a href="index.php/about">About</a></li>
                <li><a href="index.php/productsHome">Products</a></li>
                <li><a href="index.php/designs">Designs</a></li>
                <li><a href="index.php/contact">Contact</a></li>
                <li><a href="index.php/faq">FAQ</a></li>
                <li><a href="index.php/terms">Terms</a></li>
                 </ul>
</section>
        </nav>
            </div>

    </header>


    <div class="row" id="page">
    <div id="content" class="">

     <section>

         @yield('content')

     </section>




    </div>
</div>








      @section('footer')

        <footer>
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name"><h1><a href="./productsHome"><img src="img/bladeImg/miniLogo2.gif" alt="mimiLogo" class="miniLogo"/> </a></h1></li>
                </ul>
            </nav>
        </footer>
    <div class="large-6 medium-6 columns">
        <fieldset>
            <legend style="color: #798286;">Subscribe to our Newsletter</legend> <!-- TODO explain why i used inline style in evaluation -->


            <form action="./newsletter" method="get" name="newsLetter">
            <label for="email">Your Email Address:</label>
            <input type="email" name="email" value="Type in your email here...">
                <input class="submitButton" type="submit" value="Press to Subscribe" />
                </form>

        </fieldset>
    </div>
    <div class="large-2 medium-2 columns" id="social">
    <div id="socialA" class="social">
        <a href="#">
    <i class="foundicon-twitter"></i>
            </a>
        </div>
    <div class="social">
        <a href="#">
    <i class="foundicon-facebook"></i></a>
        </div>
    <div class="social">
        <a href="#">
    <i class="foundicon-linkedin"></i></a>
    </div>

    </div>
    <div id="img" class="large-4 medium-4">
        <a href="./productsHome">
        <img src="img/bladeImg/logo3.gif" id="imgLogo" alt="logO" />
        </a>
    </div>
        @show
    <p><em>Copyright &copy; Bugz &amp; Beastiez 2014.</em></p>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script>
    $(document).foundation({
    orbit: {
    animation: 'slide',
    timer_speed: 5000,
    pause_on_hover: true,
    animation_speed: 500,
    navigation_arrows: true,
    bullets: false
    }
    });
    </script>
    <script src="js/plugins/cycle2/cycle2.js"></script>
    <script src="js/plugins/fancybox/jquery.fancybox.js"></script>
    <script>
        $(document).ready(function() {

            /* This is basic - uses default settings */

            $("a.single_image").fancybox();

            /* Using custom settings */

            $("a#inline").fancybox({
                'hideOnContentClick': true
            });

            /* Apply fancybox to multiple items */

            $("a.group").fancybox({
                'transitionIn'	:	'elastic',
                'transitionOut'	:	'elastic',
                'speedIn'		:	600,
                'speedOut'		:	200,
                'overlayShow'	:	false
            });

        });
    </script>
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Bitter::latin,latin-ext' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })(); </script>


    </body>
    </html>





