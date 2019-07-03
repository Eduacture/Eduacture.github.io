<!doctype html>

<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Educature-Registration</title>
    <meta name="description" content="CourseWare - HTML5 Template By Jewel Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="icon" href="images/favicon.png" sizes="32x32">
    <link rel="icon" href="images/favicon-300x300.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="images/favicon-300x300.png">

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



<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
   
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>

<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
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
                            <li class="nav-item menu-item-has-children dropdown">
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
                            <li class="nav-item menu-item-has-children dropdown">
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
                    <h2 class="section-title">Create a Course</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create a Course</li>
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





    <section class="login-register">
        <div class="section-padding">
            <div class="container">
                <div class="contents text-center">

                    <h2 class="section-title">Create a Course</h2>

                    <form class="register-form" id="register-form" action="#" method="post">
                        <p class="form-input">
                            <input type="text" name="log" id="user_name" class="input " value="" placeholder="Course Title" required="">
                        </p>
						
						<p class="form-input">
					
                           <textarea class=" form-control input"  columns="10" placeholder="Description" required=""></textarea>
                        </p>
						
						
						
						
                        <p class="checkbox">
                                <select class="rememberme form-control">
                                        <option value="">-- Course Type --</option>
                                        <option value="male">Paid</option>
                                        <option value="female">Free</option>
                                      
                                    </select>
                            <!-- <input name="rememberme" type="checkbox" class="rememberme float-left" value="Remember Me"> By clicking I agree to the
                            <a href="#" class="" title="Recover Your Lost Password">Terms & Conditions</a> -->
                        </p>
						
						<p class="form-input">
						
                            <input type="text" name="log" id="user_name" class="input " value="" placeholder="If Paid Enter The Amount"  required="">
                        </p>
						
						<p class="checkbox">
                                <select class="rememberme form-control">
                                        <option value="">-- Category --</option>
                                        <option value="male">IT</option>
                                        <option value="female">Business</option>
                                        <option value="others">Web Development</option>
                                    </select>
                            <!-- <input name="rememberme" type="checkbox" class="rememberme float-left" value="Remember Me"> By clicking I agree to the
                            <a href="#" class="" title="Recover Your Lost Password">Terms & Conditions</a> -->
                        </p>
                        
						
						
                        <p class="form-input">
                                <input type="text" name="log" id="user_name" class="input" value="" placeholder="InstructorFirstname" required="">
                            </p>
                            <p class="form-input">
                                    <input type="text" name="log" id="user_name" class="input" value="" placeholder="InstructorLastname" required="">
                                </p>
								
								<p class="checkbox">
                                <select class="rememberme form-control">
                                        <option value="">-- Designation --</option>
                                        <option value="male">IT</option>
                                        <option value="female">Business</option>
                                        <option value="others">Web Development</option>
                                    </select>
									
									</p>
									
									


   	<p class="form-input">
        <label>Upload Course Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly style ="margin-top:20px">
        </div>
        <img id='img-upload'/>
    
	  </p>

                            <!-- <input name="rememberme" type="checkbox" class="rememberme float-left" value="Remember Me"> By clicking I agree to the
                            <a href="#" class="" title="Recover Your Lost Password">Terms & Conditions</a> -->
                    
						
                        <!-- <p class="form-input">
                            <input type="email"  name="email" id="user_email" class="input" value="" placeholder="Email" required="">
                        </p>

                        <p class="form-input">
                            <input type="password" name="pwd" id="user_pass" class="input" value="" placeholder="Password" required="">
                        </p>

                        <p class="form-input">
                            <input type="password" name="pwd" id="confirm_pass" class="input" value="" placeholder="Confirm Password" required="">
                        </p> -->
                   

                        <!-- <p class="checkbox">
                                <select class="rememberme form-control">
                                        <option value="">-- Select Role --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                            <!-- <input name="rememberme" type="checkbox" class="rememberme float-left" value="Remember Me"> By clicking I agree to the
                            <a href="#" class="" title="Recover Your Lost Password">Terms & Conditions</a> -->
                          <!--  </p> -->
                        
                         <!--   <p class="checkbox">

                                <select class="rememberme form-control">
                                    <option value="">-- Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <!-- <input name="rememberme" type="checkbox" class="rememberme float-left" value="Remember Me"> By clicking I agree to the
                                <a href="#" class="" title="Recover Your Lost Password">Terms & Conditions</a> -->
                             <!--   </p> -->

                        <p class="form-input">
                            <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Publish">
                        </p>

                    </form>

                    <!-- <div class="login-social">
                        <h2 class="section-title">Or Sign up using</h2>
                        <button class="btn facebook"><i class="fab fa-facebook"></i> Facebook</button>
                        <button class="btn twitter"><i class="fab fa-twitter"></i> Twitter</button>
                        <button class="btn google"><i class="fab fa-google-plus"></i> Google</button>
                    </div> -->
                    <!-- /.login-social -->

                  <!--   <p class="register">
                        Already have an account? <a href="login.php">Sign in now</a>
                    </p>
                </div>
                <!-- /.contents -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section-padding -->
    </section>
    <!-- /.login-register -->




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
                                <span> Copyright © 2019 <a href="#" target="_blank" rel="nofollow">Educature</a>, All rights reservsed  </span>
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