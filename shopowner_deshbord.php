<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advertise_me";
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    echo "not connected";
}

    if(!isset($_SESSION['ShopOwner_email']) && !isset($_SESSION['Shop_Pass'])){
       header('Location:shopownerlogin.php');
    }else{
        $ShopOwner_email=$_SESSION['ShopOwner_email'];
        $Shop_Pass = $_SESSION['Shop_Pass'];
        $sql ="SELECT * FROM shop_details WHERE ShopOwner_email = '".$ShopOwner_email."'   AND Shop_Pass = '".$Shop_Pass."'limit 1";
           $run_Sql = mysqli_query($conn, $sql);
             if($test = mysqli_fetch_assoc($run_Sql)){
               $Shop_Id = $test['Shop_Id']; 
               $ShopOwner_Name = $test['ShopOwner_Name'];
               $Shop_Name=$test['Shop_Name'];
               $Shop_Type = $test['Shop_Type'];
               $Shop_Pass = $test['Shop_Pass'];
               $ShopOwner_email =  $test["ShopOwner_email"];
               $Shop_Address =  $test['Shop_Address'];
               $Shop_OpenTime =  $test['Shop_OpenTime'];
               $Shop_CloseTime = $test['Shop_CloseTime'];
               $Shop_PhoneNo =  $test['Shop_PhoneNo'];
               $Shop_Location = $test['Shop_Location'];
               $Shop_State =  $test['Shop_State'];
               $Shop_City =  $test['Shop_City'];
               $Shop_ZipCode =  $test['Shop_ZipCode'];
               $shop_img1 = $test['shop_img1'];
               $shop_img2 = $test['shop_img2'];
               $shop_img3 = $test['shop_img3'];
               $shop_img4 = $test['shop_img4'];
               $shop_img5 = $test['shop_img5'];
             }
    }
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>Shop name | <?php echo $ShopOwner_Name; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
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
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<script src='../../../google_analytics_auto.js'></script></head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
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
                                <div class="gc_right_menu">
                                    <!--<ul>
                                        <li id="search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/></g></svg>
                                        </li>
                                    </ul>-->
                                </div>
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">  Home&nbsp;</i></a>
                                        <!-- mega menu start -->
                                    </li>
                                    <li class="has-mega gc_main_navigation"><a href="aboutus.php" class="gc_main_navigation">  About Us&nbsp;</i></a>
                                                                    </li>
                                    <li class="parent gc_main_navigation"><a href="contactus.php" class="gc_main_navigation">Contact Us &nbsp;</i></a>
                                        <!-- sub menu start -->
                                    </li>
								</ul>
                            </div>
                            <!-- mainmenu end -->
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
                                                                <li><a href="index.php">Home1</a></li>
																<li><a href="index_II.html">Home2</a></li>
																<li><a href="index_map.html">Home3</a></li>
																<li><a href="index_iv.html">Home4</a></li>
																<li><a href="index_v.html">Home5</a></li>
																<li><a href="index_vi.html">Home6</a></li>
                                                                <!-- .has-children -->

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
                            <ul>
                                <li><a href="PHP/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- jp profile Wrapper Start -->
    
    <div class="register_section">
        <!-- register_form_wrapper -->
        <div class="register_tab_wrapper">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">
                            <h1><center> Welcome <?php echo $ShopOwner_Name; ?></center></h1>
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    <div class="jp_regiter_top_heading">
                                    </div>
                                            <div class="image-gallery">
                                            <img src="shopimg/<?php echo $shop_img1; ?>" alt="">
                                            </div>
                                            <ul class="thumbnails">
                                                <li>
                                                <a href="shopimg/<?php echo $shop_img1; ?>" ><img src="shopimg/<?php echo $shop_img1; ?>" ></a>  
                                                </li>
                                            <li>
                                                <a href="shopimg/<?php echo $shop_img2; ?>"><img src="shopimg/<?php echo $shop_img2; ?>" ></a>
                                            </li>
                                            <li>
                                                <a href="shopimg/<?php echo $shop_img3; ?>"><img src="shopimg/<?php echo $shop_img3; ?>" ></a>
                                            </li>
                                            <li>
                                                <a href="shopimg/<?php echo $shop_img4; ?>"><img src="shopimg/<?php echo $shop_img4; ?>" ></a>
                                            </li>
                                            <li>
                                                <a href="shopimg/<?php echo $shop_img5; ?>"><img src="shopimg/<?php echo $shop_img5; ?>" ></a>
                                            </li>
                                            </ul>       
                                    <div class="row">
                                       
                                        <div class="text-center">
                                             <h2>Your Shop Details</h2>   </br>
                                        </div>   
                                        <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                               <h4> <label for="" >Shop Owner Name</label></h4>
                                                <label><?php echo $ShopOwner_Name; ?></label>
                                            </div>
                                             <!--Form Group-->
                                             <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><label for="">Shop Name</label></h4>
                                                <label><?php echo $Shop_Name; ?></label>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-store"></i>&nbsp;<label for="">Shop Type</label></h4>
                                                <label><?php echo $Shop_Type ;?></label>
                                            </div>
                                            
                                            
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-envelope"></i>&nbsp;<label>Enter Your Email-ID</label></h4>
                                                <label><?php echo $ShopOwner_email; ?></label>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-address-book"></i>&nbsp;<label for="">Shop Address</label></h4>
                                                <label><?php echo $Shop_Address;?></label>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-clock-o"></i>&nbsp;<label for="">Shop Opening Time</label></h4>
                                                <label><?php echo $Shop_OpenTime;?></label>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-clock-o"></i>&nbsp;<label for="">Shop Closing Time</label></h4>
                                                <label><?php echo $Shop_CloseTime;?></label>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><i class="fa fa-phone"></i>&nbsp;<label for="">Phone Number</label></h4>
                                                <label><?php echo $Shop_PhoneNo; ?></label>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <h4><label for="">Shop Location/Google Maps Link</label></h4>
                                                <label><?php echo $Shop_Location; ?></label>
                                                    
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><label for="">Select State</label></h4>
                                                <label><?php echo $Shop_State; ?></label>
                                            </div>
                                           
                                           <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <h4><label for="">City</label></h4>
                                                <label><?php echo $Shop_City; ?></label>
                                            </div>
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <h4><label for="">Zip Code</label></h4>
                                                <label><?php echo $Shop_ZipCode; ?></label>
                                                   
                                            </div>
                                            <!--Form Group-->
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                            <button type="submit" name="submit" class="btn btn-primary login_btn"><a href="shop_edit.php?Shop_id=<?php echo $Shop_Id; ?>" style="color:white;">Edit Shop Details</a></button>                                            </div>
                                        
                                    </div>
                                   <!-- <div class="login_message">
                                        <p>Already Registered Your Shop? <a href="shopownerlogin.php"> Login Here </a> </p>
                                    </div>-->
                                </div>
                                
                            </div>
                           <!-- <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend
                                that you logout to prevent any un-authorized access to your account</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp profile Wrapper End -->
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
                                        <li><a href="registershop.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register Shop</a></li>
                                        <li><a href="shopownerlogin.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Login In To Shop</a></li>
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
                                        <li><a href="Customer_register.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Register As A Customer</a></li>
                                        <li><a href="Customer_login.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Login As A Customer</a></li>
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
    <script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
   }
   $("#imageUpload").change(function() {
    readURL(this);
   });
    </script>
    <script>
        $(document).ready(function(){
            $('.thumbnails a').click(function(e){
              e.preventDefault();
        $('.image-gallery img').attr('src',$(this).attr('href'));
            })
          });
    </script>
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/candidate_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 06:31:15 GMT -->
</html>