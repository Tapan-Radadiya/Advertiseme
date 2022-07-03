<?php require 'PHP/shopowner_login.php' ?>
<!DOCTYPE html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<?php
$plan1 = $_REQUEST['price'];
$plan = (int)$plan1;
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>Payment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style_II.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<script src='../../../google_analytics_auto.js'></script></head>
<style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>

<body>
    <!-- preloader Start -->
    <!-- Top Scroll End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="index.php"><img src="images/header/logo2.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">
                                            Home</a>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="aboutus.php"
                                            class="gc_main_navigation">About Us</a></li>
                                    <li class="gc_main_navigation parent"><a href="contactus.php"
                                            class="gc_main_navigation">Contact Us</a></li>
                                </ul>
                            </div><!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.php"><img src="images/header/logo2.png" alt="Logo" title="Grace Church"></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="cd-dropdown-wrapper">
                                                <a class="house_toggle" href="#0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000"/></g></g></svg>
													</a>
                                                <nav class="cd-dropdown">
                                                    <h2><a href="#">Job<span>Pro</span></a></h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <li class="has-children">
                                                            <a href="#">Home</a>
                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="index.php">Home</a></li>
                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->


                                                        <li class="has-children">
                                                            <a href="#">Listing</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="listing_left.html">listing-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="listing_right.html">listing-Right</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="listing_single.html">listing-Single</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">candidates</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
																<li><a href="company_listing.html">Company-Listing</a></li>
																<li><a href="company_listing_single.html">Company-Single</a></li>
																<li><a href="candidate_listing.html">candidate-Listing</a></li>
																<li><a href="candidate_profile.html">candidate-Profile</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
														<li class="has-children">
                                                            <a href="#">Pages</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li><a href="about.html">About-Us</a></li>
																<li><a href="404_error.html">404</a></li>
																<li><a href="add_postin.html">Add-Posting</a></li>
																<li><a href="login.html">Login</a></li>
																<li><a href="register.html">Register</a></li>
																<li><a href="pricing.html">Pricing</a></li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li class="has-children">
                                                            <a href="#">Blog</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#0">Menu</a></li>
                                                                <li>
                                                                    <a href="blog_left.html">Blog-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_right.html">Blog-Right</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_single_left.html">Blog-Single-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                                <li>
                                                                    <a href="blog_single_right.html">Blog-Single-Left</a>
                                                                </li>
                                                                <!-- .has-children -->

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact.html">Contact</a>
                                                        </li>
														<li>
                                                            <a href="register.html">Sign Up</a>
                                                        </li>
														<li>
                                                            <a href="login.html">Login</a>
                                                        </li>

                                                    </ul>
                                                    <!-- .cd-dropdown-content -->



                                                </nav>
                                                <!-- .cd-dropdown -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .cd-dropdown-wrapper -->
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="jp_navi_right_btn_wrapper">
                            <!--<ul>
                                <li><a href="registershop.html"><i class="fa fa-plus-circle"></i>&nbsp;Shopowner</a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Payment</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Payment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	
	<!-- jp login wrapper start -->
	<div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">
                            <h1>Payment <span style="color: #23c0e9;"></span></h1></br>
                            <h5>Fields with * are mandetory </h5></br>
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                    <?php
                                        if(count($errors) > 0){
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                    <?php
                                        foreach($errors as $showerror){
                                            echo $showerror;
                                        }
                                    ?>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                    <div class="row">
                                        <form>  
                                            <div class="form-group col-md-67col-sm-6 col-xs-12">
                                              <center>  <h3><label for="">Billing Name</label></h3></center>
                                             </div>
                                            <!--Form Group-->                                                                     
                                                                                
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for=""><i class="fa fa-user"></i>&nbsp;Full Name</label>
                                                <input type="text" name="username" id="username" placeholder="Full Name" required>
                                                   
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for=""><i class="fa fa-envelope"></i>&nbsp;Email</label>
                                                <input type="email" name="useremail" id='useremail' value="" placeholder="Email" style="text-transform:none;" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Zip</label>
                                                <input type="number" name="Zip" value="" placeholder="Enter Zip Code" style="text-transform:none;" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Amount To Paid</label>
                                                <input type="number" name="amount" id="amount" value="<?php echo $plan?>" placeholder="" style="text-transform:none;cursor:not-allowed;opacity:0.5;" disabled>
                                            </div>  
                                           <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="check-box text-center">
                                                    <input type="checkbox" name="Check1" value="1" id="account-option_1">
                                                    &ensp;
                                                    <label for="account-option_1">I agreed to the <a href="#"class="check_box_anchr">Terms and Conditions</a> governing
                                                        the use of jobportal</label>
                                                </div>
                                            </div>-->
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                 <button type="button" name="btn" class="btn btn-primary login_btn" onclick="pay_now()">Make Payment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            <!--<p class="btm_txt_register_form">In case you are using a public/shared computer we recommend
                                that you logout to prevent any un-authorized access to your account</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- jp login wrapper end -->
	<!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_footer_main_wrapper">
            <div class="container">
                <div class="row">
                   
                    <div class="jp_footer_three_sec_main_wrapper">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_first_cont_wrapper">
                                <div class="jp_footer_first_cont">
                                    <ul>
                                        <li><i class="fa fa-plus-circle"></i> <a>Quick Access To Pages</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                                <div class="jp_footer_candidate">
                                    <h2>For Shopowner</h2>
                                    <ul>
                                        <?php
                                           if(isset($_SESSION['ShopOwner_email']) && isset($_SESSION['Shop_Pass'])){
                                        ?>
                                            <li><a href="shopowner_deshbord.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Shopowner Deshbord</a></li>
                                        <?php     
                                           }else{
                                        ?>
                                            <li><a href="registershop.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register Shop</a></li>
                                            <li><a href="shopownerlogin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Login In To Shop</a></li>
                                        <?php
                                           }
                                        ?>
                                        <li><a href="shopownerlogin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Edit Your Shop</a></li>
                                        <li><a href="shopownerlogin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> View Feedback For Your Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                <div class="jp_footer_candidate">
                                    <h2>For Coustomer</h2>
                                    <ul>
                                    <?php
                                           if(isset($_SESSION['ShopOwner_email']) && isset($_SESSION['Shop_Pass'])){
                                        ?>
                                        <li><a><i class="fa fa-caret-right" aria-hidden="true"></i>You Are Already A Shop Owner</a></li>
                                         <?php     
                                        }
                                           else{
                                        ?>
                                        <li><a href="Customer_register.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register As A Customer</a></li>
                                        <li><a href="Customer_login.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Login As A Customer</a></li>
                                        <?php
                                           }
                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                <div class="jp_footer_candidate">
                                    <h2>Information</h2>
                                    <ul>
                                        <li><a href="aboutus.php"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                        <li><a href="terms.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                        <li><a href="contactus.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_bottom_footer_Wrapper">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_left_cont">
                                        <p>© 2022-23 AdvertiseMe. All Rights Reserved.</p>
                                    </div>
                                    <div class="jp_bottom_top_scrollbar_wrapper">
                                        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_right_cont">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp footer Wrapper End -->
	<!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    <!--main js file end-->
</body>
<script>
    function pay_now(){
        var username=jQuery('#username').val();
        var useremail=jQuery('#useremail').val();
        var amount=jQuery('#amount').val();
        var options = {
            "key": "rzp_test_jGnoHm3BpgdgPQ", // Enter the Key ID generated from the Dashboard
            "amount": <?php echo $plan?>*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Advertise me",
            "description": "Test Transaction",
            "image": "images/header/logo2.png",

            "handler": function (response){
                jQuery.ajax({
                    type:'post',
                    url:'payment_process.php',
                    data:"payment_id="+response.razorpay_payment_id+"&username="+username+"&useremail="+useremail+"&amount="+amount,
                    success:function(result){
                    window.location.href="thankyou.php";
            }
        });
    }
};
        
     
var rzp1 = new Razorpay(options);
    rzp1.open();
    }
</script>

<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 06:31:15 GMT -->
</html>