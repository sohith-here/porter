
    <!--/footer-9-->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-4">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-3 sub-one-left">
                            <h6>About </h6>
                            <p class="footer-phny pe-lg-5">we provide you the best travelling offers and plans.</p>
                            <div class="columns-2 mt-4 pt-lg-2">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Company</h6>
                            <ul>

                                <li><a href="#why"><i class="fas fa-angle-right"></i> Why Us</a>
                                </li>
                                <li><a href="#licence"><i class="fas fa-angle-right"></i>Our Centers
                                    </a>
                                </li>
                                <li><a href="#log"><i class="fas fa-angle-right"></i>Our Offers
                                    </a></li>

                                <li><a href="#career"><i class="fas fa-angle-right"></i> Careers</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Services</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i>Book Vehicles</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i>Rent Vehicles</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i>Vehicle Search</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i>Other Services</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Explore</h6>
                            <ul>
                                <li><a href="#processing"><i class="fas fa-angle-right"></i>Scooters</a>
                                </li>
                                <li><a href="#research"><i class="fas fa-angle-right"></i>Bikes</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i>Cars</a>
                                </li>
                                <li><a href="#metal"><i class="fas fa-angle-right"></i>Other Vehicles</a>
                                </li>


                            </ul>
                        </div>
                        <div class="col-lg-3 sub-one-left ps-lg-5">
                            <h6>Stay Update!</h6>
                            <p class="w3f-para mb-4">Subscribe to our newsletter to receive our weekly feed.</p>
                            <div class="w3l-subscribe-content align-self mt-lg-0 mt-5">
                                <form action="#" method="post" class="subscribe-wthree">
                                    <div class="flex-wrap subscribe-wthree-field">
                                        <input class="form-control" type="email" placeholder="Email" name="email" required="">
                                        <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="below-section mt-5 pt-lg-3">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>© 2021 PORTER.All rights reserved.
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="#url">Privacy Policy</a>
                            </li>
                            <li><a href="#url">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- stats number counter-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
