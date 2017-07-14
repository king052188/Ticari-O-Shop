
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height,target-densitydpi=medium-dpi, user-scalable=0" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="eCommerce">
    <meta name="robots" content="all">
    <title>Ticari Online Shop</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css', $is_secured) }}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css', $is_secured) }}">
    <link rel="stylesheet" href="{{ asset('/css/colors/purple.css', $is_secured) }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css', $is_secured) }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.transitions.css', $is_secured) }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css', $is_secured) }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css', $is_secured) }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/images/favicon.ico', $is_secured) }}">
    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/js/html5shiv.js', $is_secured) }}"></script>
    <script src="{{ asset('/js/respond.min.js', $is_secured) }}"></script>
    <![endif]-->
    <script>
        var php_usd = {{ $php_usd }};
        var local = "{{ $local['Currency'][0]['Type'] }}";
        var item_price_current = 22210.55;
        var item_price_previous = 29558.48;
    </script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=259936581105419";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->
    <nav class="top-bar animate-dropdown">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <ul>
                    <li><a href="#faq" data-toggle="modal" data-target="#faq">FAQ</a></li>
                    <li><a href="#disclaimer" data-toggle="modal" data-target="#disclaimer">Disclaimer</a></li>
                    <li><a href="#contact" data-toggle="modal" data-target="#contact">Contact</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-6 no-margin">
                <ul class="right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#change-currency">{{ $local['Currency'][0]['Country'] }} ({{ $local['Currency'][0]['Type'] }})</a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $local['Currency'][1]['Url'] }}">{{ $local['Currency'][1]['Country'] }} ({{ $local['Currency'][1]['Type'] }})</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> <span id="price_current_nav"></span> </a></li>
                    <li><a id="send-message" class="le-button" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> Send Message</a></li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.container -->
    </nav><!-- /.top-bar -->
    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->


    <!-- ============================================================= HEADER ============================================================= -->

    <header class="no-padding-bottom header-alt">

        <div class="container no-padding">

            <div class="col-xs-12 col-md-12 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    {{--<img src="/images/logo.jpg" />  <img src="/images/logo.jpg" />--}}
                </div>
                <!-- ============================================================= LOGO : END ============================================================= -->

            </div><!-- /.logo-holder -->

        </div>

        <!-- ========================================= NAVIGATION ========================================= -->
        <nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
            <p style="height: 30px;"></p>
        </nav><!-- /.megamenu-vertical -->
        <!-- ========================================= NAVIGATION : END ========================================= -->

    </header>

    <!-- ============================================================= HEADER : END ============================================================= -->

    <p style="height: 30px;"></p>

    @yield('content')

    <!-- ============================================================= FOOTER ============================================================= -->
    <footer id="footer">

        <div class="sub-form-row">
            <div class="container">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                    <form role="form">
                        <input placeholder="Subscribe to our newsletter">
                        <button class="le-button">Subscribe</button>
                    </form>
                </div>
            </div><!-- /.container -->
        </div><!-- /.sub-form-row -->

        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">
                    <div class="copyright">
                        2017 &copy; Ticari Online Shop - <a href="mailto:Sales@ticary.kpa.ph">Sales@ticary.kpa.ph</a>
                    </div><!-- /.copyright -->
                </div>
                <div class="col-xs-12 col-sm-6 no-margin">
                    <div class="payment-methods ">
                        <ul>
                            <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->

    </footer><!-- /#footer -->
    <!-- ============================================================= FOOTER : END ============================================================= -->

</div><!-- /.wrapper -->

<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="faq" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">FAQ</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="disclaimer" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Disclaimer</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="contact" class="modal fade" role="dialog" >
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contact Us - Leave a Message</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12">
                        <section class="section leave-a-message">
                            <p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices, neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
                            <form id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post" >
                                <div class="row field-row">
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Name*</label>
                                        <input class="le-input" >
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <label>Your Email*</label>
                                        <input class="le-input" >
                                    </div>
                                </div><!-- /.field-row -->

                                <div class="field-row">
                                    <label>Subject</label>
                                    <input type="text" class="le-input">
                                </div><!-- /.field-row -->

                                <div class="field-row">
                                    <label>Your Message</label>
                                    <textarea rows="8" class="le-input"></textarea>
                                </div><!-- /.field-row -->

                                <div class="buttons-holder">
                                    <button type="submit" class="le-button huge">Send Message</button>
                                </div><!-- /.buttons-holder -->
                            </form><!-- /.contact-form -->
                        </section><!-- /.leave-a-message -->
                    </div><!-- /.col -->


                </div><!-- /.row -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/jquery-1.10.2.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/jquery-migrate-1.2.1.js', $is_secured) }}"></script>
<script src="{{ asset('/js/bootstrap.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/gmap3.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/bootstrap-hover-dropdown.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/css_browser_selector.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/echo.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/jquery.easing-1.3.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/bootstrap-slider.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/jquery.raty.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/jquery.prettyPhoto.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/jquery.customSelect.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/wow.min.js', $is_secured) }}"></script>
<script src="{{ asset('/js/buttons.js', $is_secured) }}"></script>
<script src="{{ asset('/js/scripts.js', $is_secured) }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
<script>
    $(document).ready(function() {
        var price_curr = price_(item_price_current);
        var price_prev = price_(item_price_previous);
        $("#price_current_nav").text(price_curr);
        $("#price-current").text(price_curr);
        $("#price-prev").text(price_prev);
    })
</script>
</body>
</html>
