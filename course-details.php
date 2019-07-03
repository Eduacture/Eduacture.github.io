<!doctype html>

<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educature-Course Details</title>
    <meta name="description" content="CourseWare - HTML5 Template By Jewel Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="images/favicon1.png" sizes="32x32">
    <link rel="icon" href="images/favicon2.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="images/favicon2.png">

    <!-- Import Template Icons CSS Files -->

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">

    <!-- Import Bootstrap CSS File -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Import External CSS Files -->

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/selectric.css">

    <!-- Import Template's CSS Files -->

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            // Gets the video src from the data-src on each button
            var $videoSrc;
            $('.video-btn').click(function() {

                $videoSrc = $(this).data("src");
            });
            console.log($videoSrc);

            $('#myModal').on('shown.bs.modal', function(e) {
                e.preventDefault();
                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', $videoSrc);
            })

            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function(e) {
                // a poor man's stop video
                $("#video ").attr('src', '');
            })

            // document ready  
        });

    </script>

</head>


<body>
    <header class="masthead">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-contact">
                            <div class="trggericon"><i class="fas fa-at"></i></div>
                            <div class="close"><i class="far fa-times-circle"></i></div>
                            <div class="contacts">
                                <span><i class="fas fa-phone"></i> <a href="tel:2268996424">(+1) 226-899-6424</a></span>
                                <span><i class="fas fa-envelope"></i> <a href="mailto:info.educature@gmail.com">info.educature@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-cart dropdown float-right">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cart <i class="fas fa-shopping-cart"></i>
                            </a>
                            <div class="dropdown-menu cart-menu">
                                <div class="widget_shopping_cart_content">
                                    <div class="cart-top">
                                        <div class="item media">
                                            <button class="btn close-btn"><i class="icons icon-close"></i></button>
                                            <div class="item-thumbnail">
                                                <img src="images/shop/1.jpg" alt="Item Thimbnail">
                                            </div>
                                            <!-- /.item-thumbnail -->
                                            <div class="item-details media-body">
                                                <!-- <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" /></div> -->
                                                <!-- /.rating -->
                                                <h4 class="item-title"><a href="#">Product Name Here</a></h4>
                                                <!-- /.item-title -->
                                                <div class="price">
                                                    <span class="current-price">$15.99</span>
                                                    <!-- /.current-price -->
                                                </div>
                                                <!-- /.price -->
                                                <span class="item-count">3</span>
                                            </div>
                                            <!-- /.item-details -->
                                        </div>
                                        <!-- /.item -->

                                        <div class="item media">
                                            <button class="btn close-btn"><i class="icons icon-close"></i></button>
                                            <div class="item-thumbnail">
                                                <img src="images/shop/2.jpg" alt="Item Thimbnail">
                                            </div>
                                            <!-- /.item-thumbnail -->
                                            <div class="item-details media-body">
                                                <!-- <div class="rating"><input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" /></div> -->
                                                <!-- /.rating -->

                                                <h4 class="item-title"><a href="#">Product Name Here</a></h4>
                                                <!-- /.item-title -->
                                                <div class="price">
                                                    <span class="current-price">$15.99</span>
                                                    <!-- /.current-price -->
                                                </div>
                                                <!-- /.price -->
                                                <span class="item-count">3</span>
                                            </div>
                                            <!-- /.item-details -->
                                        </div>
                                        <!-- /.item -->
                                    </div>
                                    <!-- /.cart-top -->

                                    <div class="cart-middle">
                                        <button class="btn float-left"><i class="ti-trash"></i> Empty Cart</button>
                                        <div class="price-total float-right">
                                            <span>Sub total:</span>
                                            <div class="price">
                                                <span class="current-price">$1555.99</span>
                                                <!-- /.current-price -->
                                            </div>
                                            <!-- /.price -->
                                        </div>
                                        <!-- /.price-total -->
                                    </div>
                                    <!-- /.cart-middle -->

                                    <div class="cart-bottom">
                                        <a href="cart.php" class="btn float-left"><i class="icons icon-basket-loaded"></i> View Cart</a>
                                        <a href="checkout.php" class="btn float-right">Checkout</a>
                                    </div>
                                    <!-- /.cart-bottom -->
                                </div>
                                <!-- /.widget_shopping_cart_content -->
                            </div>
                        </div>

                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                User Profile
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="mycourses.php"><i class="fa fa -cog"></i>My Courses</a>

                                <a class="nav-link" href="login.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header-top -->

        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-md m-0">
                    <a class="navbar-brand" href="index.php"><img src="images/Untitled-1.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item menu-item-has-children dropdown ">
                                <a class="dropdown-item" href="index.php">Home</a>
                                <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php">Home</a> -->
                                <!-- <a class="dropdown-item" href="index.php">Demo 01</a>
                                    <a class="dropdown-item" href="index-02.php">Demo 02</a>
                                    <a class="dropdown-item" href="index-03.php">Demo 03</a>
                                    <a class="dropdown-item" href="index-04.php">Demo 04</a> -->
                                <!-- </div> -->
                            </li>
                            <li class="nav-item menu-item-has-children dropdown active">
                                <a class="dropdown-item" href="courses.php">All Courses</a>
                                <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="index.php">Home</a> -->
                                <!-- <a class="dropdown-item" href="index.php">Demo 01</a>
                                        <a class="dropdown-item" href="index-02.php">Demo 02</a>
                                        <a class="dropdown-item" href="index-03.php">Demo 03</a>
                                        <a class="dropdown-item" href="index-04.php">Demo 04</a> -->
                                <!-- </div> -->
                            </li>
                            <li class="nav-item menu-item-has-children dropdown">
                                <a class="dropdown-item" href="instructors.php">All Instructors</a>
                                <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="index.php">Home</a> -->
                                <!-- <a class="dropdown-item" href="index.php">Demo 01</a>
                                            <a class="dropdown-item" href="index-02.php">Demo 02</a>
                                            <a class="dropdown-item" href="index-03.php">Demo 03</a>
                                            <a class="dropdown-item" href="index-04.php">Demo 04</a> -->
                                <!-- </div> -->
                            </li>
                            <!-- <li class="nav-item menu-item-has-children dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="courses.php">All Courses</a>
                                    <a class="dropdown-item" href="course-details.php">IT & Software</a>
                                    <a class="dropdown-item" href="course-details.php">Development</a>
                                    <a class="dropdown-item" href="course-details.php">Design </a>
                                    <a class="dropdown-item" href="course-details.php">Business</a>
                                    <a class="dropdown-item" href="course-details.php">Photography</a>
                                    <a class="dropdown-item" href="course-details.php">Marketing</a>
                                    <a class="dropdown-item" href="course-details.php">Art & Science</a>
                                    <a class="dropdown-item" href="course-details.php">Teaching</a>
                                </div>
                            </li>
                            <li class="nav-item menu-item-has-children dropdown">

                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Instructors</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="instructors.php">All Instructors</a>
                                    <a class="dropdown-item" href="instructor-details.php">Web Developer</a>
                                    <a class="dropdown-item" href="instructor-details.php">Designer</a>
                                    <a class="dropdown-item" href="instructor-details.php">Photographer</a>
                                    <a class="dropdown-item" href="instructor-details.php">Businessmen</a>
                                    <a class="dropdown-item" href="instructor-details.php">Professor</a>


                                </div>
                            </li> -->

                            <li class="nav-item menu-item-has-children dropdown">
                                <a class="dropdown-item" href="became-a-instructor.php">Become a Instructor</a>
                                <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Become a Instructor</a>
                                <div class="dropdown-menu">

                                </div> -->
                            </li>

                            <li class="nav-item menu-item-has-children dropdown">
                                <div class="menu-cart dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Account <i class="fas fa-user"></i>
                                    </a>
                                    <div class="dropdown-menu cart-menu">
                                        <div class="widget_shopping_cart_content">

                                            <div class="cart-bottom">
                                                <a href="login.php" class="btn float-left"><i class="icons icon-basket-loaded"></i>Login</a>
                                                <a href="register.php" class="btn float-right">SignUp</a>
                                            </div>
                                            <!-- /.cart-bottom -->
                                        </div>
                                        <!-- /.widget_shopping_cart_content -->
                                    </div>
                                </div>
                                <!-- <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i style="font-size: 25px" class="fas fa-user-circle"></i></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="404.php">404 Error</a>
                                    <a class="dropdown-item" href="about.php">About</a>
                                    <a class="dropdown-item" href="coming-soon.php">Coming Soon</a>
                                    <a class="dropdown-item" href="contact.php">Contact</a>
                                    <a class="dropdown-item" href="events.php">Events</a>
                                    <a class="dropdown-item" href="event-details.php">Event Details</a>
                                    <a class="dropdown-item" href="faq.php">FAQ</a>
                                    <a class="dropdown-item" href="portfolio.php">Portfolio</a>
                                    <a class="dropdown-item" href="portfolio-single.php">Portfolio Single</a>
                                    <a class="dropdown-item" href="login.php">Login</a>
                                    <a class="dropdown-item" href="register.php">Register</a>
                                    <a class="dropdown-item" href="shop.php">Shop</a>
                                    <a class="dropdown-item" href="shop-single.php">Shop Single</a>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-bottom -->
    </header>
    <!-- /.masthead -->

    <section class="page-name background-bg" data-image-src="images/breadcrumb.jpg">
        <div class="overlay">
            <div class="section-padding">
                <div class="container">
                    <h2 class="section-title">All Course</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course</li>
                        </ol>
                    </nav>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section-padding -->
        </div>
        <!-- /.overlay -->
    </section>
    <!-- /.page-name -->


    <section class="courses">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="course-title">Apache Streaming with Python and PySpark</h2>
                        <!-- /.course-title -->
                        <div class="course-meta">
                            <span class="meta-details">
                                <img class="rounded-circle float-left" src="images/avatar/2.png" alt="Avatar">

                                <span class="meta-id">Instructor</span>
                                <a class="name" href="#">Alex Hilfisher</a>
                            </span>
                            <span class="meta-details">
                                <span class="meta-id">Category</span>
                                <span>Design</span>
                            </span>
                            <span class="meta-details">
                                <span class="meta-id">Reviews</span>
                                <span class="rating">
                                    <input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" />
                                    <span>(2,543 Ratings)</span>
                                </span>
                                <!-- /.rating -->
                            </span>
                        </div>
                        <img class="radius" src="images/single.jpg" alt="Course Image">

                        <div class="course-single-details">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-1" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                <!-- <a class="nav-item nav-link" id="nav-2" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a> -->
                                <a class="nav-item nav-link" id="nav-3" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                                <a class="nav-item nav-link" id="nav-4" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                            </div>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description">
                                    <h4 class="title">Course description</h4>
                                    <p>
                                        <strong>
                                            The office assistant wasthe boss’s man,spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of service Gregor had never once yet been ill
                                        </strong>
                                    </p>

                                    <p>
                                        His boss would certainly come round with the doctor from the medical insurance company, accuse his parents of having a lazy son, and accept the doctor’s recommendation not to make any claim as the doctor believed that no-one was ever ill but that many
                                        were workshy. And what’s more, would he have been entirely wrong in this case? Gregor did in fact, apart from excessive sleepiness after sleeping for so long, feel completely well and even felt much hungrier than
                                        usual.
                                    </p>

                                    <p>
                                        He was still hurriedly thinking all this through, unable to decide to get out of the bed, when the clock struck quarter to seven. There was a cautious knock at the door near his head. Gregor, somebody called – it was his mother – it’s quarter to seven.
                                        Didn’t you want to go somewhere? That gentle voice, Gregor was shocked when he heard his own voice answering, it could hardly be recognised as the voice he had had before
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum">
                                    <h4 class="title">Curriculum for this Course</h4>
                                    <div class="curriculum-details">
                                        <div class="content-table">
                                            <span class="title">Getting Started: Itroduction</span>
                                            <ul class="content-list">
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="far fa-file"></i> Photoshop Interface - just the useful stuff!</a></span>
                                                    <span class="float-right">1.5MB</span>
                                                </li>
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="fa fa-play-circle"></i> User interface explained</a></span>
                                                    <span class="float-right">8:31</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.content-table -->

                                        <div class="content-table">
                                            <span class="title">Paint Brush Tool</span>
                                            <ul class="content-list">
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="far fa-file"></i> Photoshop Interface - just the useful stuff!</a></span>
                                                    <span class="float-right">1.5MB</span>
                                                </li>
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="fa fa-play-circle"></i> User interface explained</a></span>
                                                    <span class="float-right">8:31</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.content-table -->

                                        <div class="content-table">
                                            <span class="title">Moving, Resizing & Zooming In</span>
                                            <ul class="content-list">
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="far fa-file"></i> Photoshop Interface - just the useful stuff!</a></span>
                                                    <span class="float-right">1.5MB</span>
                                                </li>
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="fa fa-play-circle"></i> User interface explained</a></span>
                                                    <span class="float-right">754kb</span>
                                                </li>
                                                <li>
                                                    <span class="float-left"><a href="#"><i class="fa fa-play-circle"></i> User interface explained</a></span>
                                                    <span class="float-right">8:31</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.content-table -->
                                    </div>
                                    <!-- /.curriculum-details -->
                                </div>

                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor">
                                    <div class="author-bio">
                                        <h3 class="title">About the Instructor</h3>
                                        <div class="author-contents media">
                                            <div class="author-avatar float-left"><img class="radius" src="images/au.jpg" alt="Avatar"></div>
                                            <!-- /.author-avatar -->
                                            <div class="author-details media-body">
                                                <h3 class="name">Julia Adams</h3>
                                                <span>UX Consultant and Web Design Instructor</span>
                                                <p>
                                                    There was a painful and uncontrollable squeaking mixed in with it, the words could be made out at first but then there was a sort of echo which made them unclear, leaving the hearer unsure whether he had heard properly or not.
                                                </p>
                                                <a href="instructor-details.php" class="load-more">Learn more <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews">
                                    <h3 class="title">Student Reviews</h3>

                                    <div class="course-reviews">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="average-rating text-center">
                                                    <div class="rating">
                                                        <input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" />
                                                    </div>
                                                    <!-- /.rating -->
                                                    <span>Average Rating</span>
                                                </div>
                                                <!-- /.average-rating -->
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="rating-icons">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span class="rating-value">54%</span>
                                                    <!-- /.rating-value -->
                                                </div>
                                                <!-- /.rating-icons -->

                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="rating-icons">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <span class="rating-value">30%</span>
                                                    <!-- /.rating-value -->
                                                </div>
                                                <!-- /.rating-icons -->

                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="rating-icons">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <span class="rating-value">12%</span>
                                                    <!-- /.rating-value -->
                                                </div>
                                                <!-- /.rating-icons -->

                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="rating-icons">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <span class="rating-value">3%</span>
                                                    <!-- /.rating-value -->
                                                </div>
                                                <!-- /.rating-icons -->

                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="rating-icons">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <i class="far fa-star-o"></i>
                                                    <span class="rating-value">1%</span>
                                                    <!-- /.rating-value -->
                                                </div>
                                                <!-- /.rating-icons -->
                                            </div>
                                        </div>

                                    </div>

                                    <!-- /.btn-container -->
                                </div>
                            </div>
                        </div>
                        <!-- /.course-single-details -->


                        <div class="related-courses">
                            <h2 class="section-title">Related Courses</h2>
                            <div class="course-items">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-thumb">
                                                <a href="course-details.php"><img src="images/popular/1.jpg" alt="Item Thumbnail"></a>
                                            </div>
                                            <!-- /.item-thumb -->
                                            <div class="item-details">
                                                <h3 class="item-title"><a href="course-details.php">HTML5, CSS3, Bootstrap Web Design for Beginners</a></h3>
                                                <!-- /.item-title -->
                                                <span class="instructor"><a href="instructor-details.php">Justin Marks</a></span>
                                                <!-- /.instructor -->
                                                <div class="details-bottom">

                                                    <!-- /.course-price -->
                                                    <div class="rating float-left">
                                                        <input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" />
                                                    </div>
                                                    <!-- /.rating -->
                                                </div>
                                                <div class="text-center">
                                                    <div class="course-price "><span class="currency">$</span><span class="price">15.99</span></div>
                                                </div>
                                                <!-- /.details-bottom -->
                                            </div>
                                            <!-- /.item-details -->
                                        </div>
                                        <!-- /.item -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-thumb">
                                                <a href="course-details.php"><img src="images/popular/1.jpg" alt="Item Thumbnail"></a>
                                            </div>
                                            <!-- /.item-thumb -->
                                            <div class="item-details">
                                                <h3 class="item-title"><a href="course-details.php">HTML5, CSS3, Bootstrap Web Design for Beginners</a></h3>
                                                <!-- /.item-title -->
                                                <span class="instructor"><a href="instructor-details.php">Justin Marks</a></span>
                                                <!-- /.instructor -->
                                                <div class="details-bottom">

                                                    <!-- /.course-price -->
                                                    <div class="rating float-left">
                                                        <input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" />
                                                    </div>
                                                    <!-- /.rating -->
                                                </div>
                                                <div class="text-center">
                                                    <div class="course-price "><span class="currency">$</span><span class="price">15.99</span></div>
                                                </div>
                                                <!-- /.details-bottom -->
                                            </div>
                                            <!-- /.item-details -->
                                        </div>
                                        <!-- /.item -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="item">
                                            <div class="item-thumb">
                                                <a href="course-details.php"><img src="images/popular/1.jpg" alt="Item Thumbnail"></a>
                                            </div>
                                            <!-- /.item-thumb -->
                                            <div class="item-details">
                                                <h3 class="item-title"><a href="course-details.php">HTML5, CSS3, Bootstrap Web Design for Beginners</a></h3>
                                                <!-- /.item-title -->
                                                <span class="instructor"><a href="instructor-details.php">Justin Marks</a></span>
                                                <!-- /.instructor -->
                                                <div class="details-bottom">

                                                    <!-- /.course-price -->
                                                    <div class="rating float-left">
                                                        <input type="hidden" class="rating-tooltip-manual" data-filled="fas fa-star" data-empty="far fa-star" value="4.5" data-fractions="5" />
                                                    </div>
                                                    <!-- /.rating -->
                                                </div>
                                                <div class="text-center">
                                                    <div class="course-price "><span class="currency">$</span><span class="price">15.99</span></div>
                                                </div>
                                                <!-- /.details-bottom -->
                                            </div>
                                            <!-- /.item-details -->
                                        </div>
                                        <!-- /.item -->
                                    </div>


                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.course-items -->
                        </div>
                        <!-- /.related-courses -->
                    </div>

                    <div class="col-md-4">
                        <aside class="sidebar">
                            <a href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular1.mp4" data-target="#myModal">

                                <button class="btn btn-lg enroll-btn">Preview</button></a>
                            <a href="cart.php"> <button class="btn btn-lg enroll-btn">Add to cart</button></a>

                            <div class="info">
                                <ul class="info-list">

                                    <li>
                                        <div class="course-img">
                                            <a type="button" href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular1.mp4" data-target="#myModal">
                                                <img src="images/single.jpg" width="120px" height="120px" />
                                                <div class="play"><img src="http://cdn1.iconfinder.com/data/icons/flavour/button_play_blue.png" /> </div>
                                            </a>
                                        </div>
                                        <div class="course-video-details">
                                            <span class="course-name">what is Angular Js?</span>
                                            <span class="course-owner">Rutu Patel</span>
                                            <span class="course-duration">13:56 hrs</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="course-img">
                                            <a type="button" href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular2.mp4" data-target="#myModal">
                                                <img src="images/single.jpg" width="120px" height="120px" />
                                                <div class="play"><img src="http://cdn1.iconfinder.com/data/icons/flavour/button_play_blue.png" /> </div>
                                            </a>
                                        </div>
                                        <div class="course-video-details">
                                            <span class="course-name">model and controller</span>
                                            <span class="course-owner">Rutu Patel</span>
                                            <span class="course-duration">13:56 hrs</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course-img">
                                            <a type="button" href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular3.mp4" data-target="#myModal">
                                                <img src="images/single.jpg" width="120px" height="120px" />
                                                <div class="play"><img src="http://cdn1.iconfinder.com/data/icons/flavour/button_play_blue.png" /> </div>
                                            </a>
                                        </div>
                                        <div class="course-video-details">
                                            <span class="course-name">Controller in details</span>
                                            <span class="course-owner">Rutu Patel</span>
                                            <span class="course-duration">13:56 hrs</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course-img">
                                            <a type="button" href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular4.mp4" data-target="#myModal">
                                                <img src="images/single.jpg" width="120px" height="120px" />
                                                <div class="play"><img src="http://cdn1.iconfinder.com/data/icons/flavour/button_play_blue.png" /> </div>
                                            </a>
                                        </div>
                                        <div class="course-video-details">
                                            <span class="course-name">Angular ng directive</span>
                                            <span class="course-owner">Rutu Patel</span>
                                            <span class="course-duration">13:56 hrs</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="course-img">
                                            <a type="button" href="" class="video-btn" data-backdrop="static" data-keyboard="false" data-controls-modal="modal" data-toggle="modal" data-src="video/angular5.mp4" data-target="#myModal">
                                                <img src="images/single.jpg" width="120px" height="120px" />
                                                <div class="play"><img src="http://cdn1.iconfinder.com/data/icons/flavour/button_play_blue.png" /> </div>
                                            </a>
                                        </div>
                                        <div class="course-video-details">
                                            <span class="course-name">two way binding</span>
                                            <span class="course-owner">Rutu Patel</span>
                                            <span class="course-duration">13:56 hrs</span>
                                        </div>
                                    </li>




                                </ul>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">




                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </aside>
                        <!-- /.sidebar -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section-padding -->
    </section>
    <!-- /.courses -->



    <footer class="site-footer">
        <div class="footer-top light-black">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="widget widget_about_us">
                                <!--  <h4>Courseware</h4> -->
                                <img class="footer-logo" src="images/Untitled-2.png" alt="Site Logo">
                                <div class="widget-details">
                                    <p>
                                        We are a team of different geeks that believe in producing top-quality courses and category based on best videos.
                                    </p>
                                    <ul>
                                        <li> <i class="fa fa-phone-square"></i><a href="tel:2268996424">(+1) 226-899-6424</a></li>
                                        <li> <i class="fa fa-envelope-square"></i><a href="mailto:info.educature@gmail.com">info.educature@gmail.com</a></li>
                                    </ul>
                                    <div class="widget-social text-center">
                                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </div>
                                    <!-- /.widget-social -->
                                </div>
                                <!-- /.widget-details -->
                            </div>
                            <!-- /.widget -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget_nav_menu">
                                <h4>Quick Links</h4>
                                <div class="widget-details">
                                    <ul class="menu">
                                        <li class="menu-item"><a href="courses.php"><i class="fa fa-angle-double-right"></i> Courses</a></li>
                                        <li class="menu-item"><a href="instructors.php"><i class="fa fa-angle-double-right"></i> Instructor</a></li>
                                        <li class="menu-item"><a href="about.php"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                        <li class="menu-item"><a href="contact.php"><i class="fa fa-angle-double-right"></i> Contact</a></li>
                                        <li class="menu-item"><a href="became-a-instructor.php"><i class="fa fa-angle-double-right"></i> Become a Instructor</a></li>

                                    </ul>
                                </div>
                                <!-- /.widget-details -->
                            </div>
                            <!-- /.widget -->
                        </div>


                        <div class="col-lg-5 col-md-6">
                            <div class="widget widget_nav_menu">
                                <h4>Subscribe Weekly Newsletter </h4>
                                <div class="widget-details">
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1971 bm8 " method="post" data-id="1971" data-name="Mail Form">
                                        <input class="subscribe-email" type="email" id="subscribe-email" name="EMAIL" placeholder="Enter Email Address Here" required="">
                                        <input class="btn btn-lg mt-2 banner-btn" type="submit" id="subscribe-submit" name="submit" value="Subscribe now">
                                    </form>
                                    <!-- <ul class="menu">
                                        <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> FAQ</a></li>
                                         <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> Documentation</a></li>
                                        <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> Forums</a></li> 
                                        <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> Career</a></li>
                                        <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> Community</a></li>
                                        <li class="menu-item"><a href="#"><i class="fa fa-angle-double-right"></i> Management</a></li> -->
                                    <!--                                    </ul> -->-->
                                </div>
                                <!-- /.widget-details -->
                            </div>
                            <!-- /.widget -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section-padding -->
        </div>
        <!-- /.footer-top -->

        <div class="footer-bottom black-bg">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copy-right text-center">
                                <span> Copyright © 2019 <a href="#" target="_blank" rel="nofollow">Educature</a>, All rights reservsed </span>
                            </div>
                            <!-- /.copy-right -->
                        </div>

                    </div>



                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section-padding -->
        <!--        </div>-->
        <!-- /.footer-bottom -->
    </footer>
    <!-- /.site-footer -->


</body>

</html>