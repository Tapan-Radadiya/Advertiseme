<?php
session_start();
$errors=array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advertise_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{   
	echo "not connected";
}
$Shop_Id=$_REQUEST['Shop_id'];


    if(!isset($_SESSION['ShopOwner_email']) && !isset($_SESSION['Shop_Pass'])){
       header('Location:shopownerlogin.php');
    }else{
        $sql ="SELECT * FROM shop_details WHERE Shop_Id = '".$Shop_Id."' limit 1";
           $run_Sql = mysqli_query($conn, $sql);
             if($test = mysqli_fetch_assoc($run_Sql)){
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

    if(isset($_POST['submit'])){
        $ShopOwner_Name = $_POST['ShopOwner_Name'];
        $Shop_Name = $_POST['Shop_Name'];
        $Shop_Type = $_POST['Shop_Type'];
        $Shop_Address = $_POST['Shop_Address'];
        $Shop_OpenTime = $_POST['Shop_OpenTime'];
        $Shop_CloseTime = $_POST['Shop_CloseTime'];
        $Shop_Location = $_POST['Shop_Location'];
        $Shop_State = $_POST['Shop_State'];
        $Shop_City = $_POST['Shop_City'];
        $Shop_ZipCode = $_POST['Shop_ZipCode'];


        $sql="UPDATE `shop_details` SET `ShopOwner_Name` = '$ShopOwner_Name', `Shop_Name` = '$Shop_Name', `Shop_Type` = '$Shop_Type',
         `Shop_Address` = ' $Shop_Address', `Shop_OpenTime` = '$Shop_OpenTime', `Shop_CloseTime` = '$Shop_CloseTime', `Shop_Location` = '$Shop_Location', `Shop_State` = '$Shop_State', `Shop_City` = '$Shop_City', `Shop_ZipCode` = '$Shop_ZipCode' WHERE `shop_details`.`Shop_Id` = '$Shop_Id'";

        $run_Sql = mysqli_query($conn, $sql);
        
    if($run_Sql) {
        header("location:shopowner_deshbord.php");
    
    }
    
    }
?>
<?php
$query = mysqli_query($conn,"SELECT * FROM state");
$rowcount = mysqli_num_rows($query);

$query1 = mysqli_query($conn,"SELECT * FROM category");
$rowcount1 = mysqli_num_rows($query1);
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
                                <ul class="float_left">
                                    <li class="has-mega gc_main_navigation"><a href="index.php" class="gc_main_navigation">
                                            Home</a>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="aboutus.php"
                                            class="gc_main_navigation">About Us</a></li>
                                    <li class="gc_main_navigation parent"><a href="contact.php"
                                            class="gc_main_navigation">Contact</a></li>
                                </ul>
                            </div>	</ul>
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
                               <!-- <li><a href="PHP/logout.php">Logout</a></li>-->
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
                                    <div class="jp_listing_left_sidebar_wrapper1">
                                    <div class="jp_job_des">
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
                                    </div>
                                </div>
                                    <div class="row">
                                        <form action=" " method="post" data-toggle="validator" >  
                                        <div class="text-center">
                                             <h2>Your Shop Details</h2>   </br>
                                        </div>   
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Location/Google Maps Link</label>
                                                <input type="text" name="Shop_Location" value="<?php echo $Shop_Location; ?>" placeholder="Shop location" required>
                                                    
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Owner Name</label>
                                                <input type="text" name="ShopOwner_Name" value="<?php echo $ShopOwner_Name; ?>" placeholder="Shop Owner Name*" required>
                                            </div>
                                             <!--Form Group-->
                                             <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Name</label>
                                                <input type="text" name="Shop_Name" value="<?php echo $Shop_Name; ?>" placeholder="Shop Name*" required>
                                            </div>

                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Type</label>
                                                <input type="text" name="Shop_Type" value="<?php echo $Shop_Type ;?>" disabled="disabled" placeholder="Shop Name*" required>
                                                <select class="form-select" id="validationDefault04" name="Shop_Type" required>
                                                        <option value="<?php echo $Shop_Type ?>"> --Select--</option>
                                                            <?php
                                                                for ($i=1; $i <=$rowcount1 ; $i++) { 
                                                                    $row = mysqli_fetch_array($query1);
                                                            ?>
                                                            <option><?php echo $row['Category_Name']?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        
                                                    </select>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Password</label>
                                                <input type="password" id="myInput" name="Password1" disabled="disabled" style="cursor: not-allowed;opacity: 0.4;" value="<?php echo $Shop_Pass;?>" placeholder="Shop Password*" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <a href = "#" ><label style="opacity:0;"><u><h4>Change your password</h4></u></label></a><br>    
                                            <a href = "#" ><label><u><h4>Change your password</h4></u></label></a>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <label for="">Show Password</label>
                                                <input type="checkbox" onclick="myFunction()">
                                                <script>
                                                    function myFunction() {
                                                        var x = document.getElementById("myInput");
                                                        if (x.type === "password") {
                                                        x.type = "text";
                                                        } 
                                                        else {
                                                        x.type = "password";
                                                        }
                                                    }
                                                </script>
                                            </div>
                                            
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Enter Your Email-ID</label>
                                                <input type="tel" name="ShopOwner_email" value="<?php echo $ShopOwner_email; ?>" style="text-transform:none;" disabled="disabled"  placeholder="Gmail ID" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <a href = "#" ><label style="opacity:0;"><u><h4>Change your Email-ID</h4></u></label></a><br>    
                                            <a href = "#" ><label><u><h4>Change your Email-ID</h4></u></label></a>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-7 col-sm-6 col-xs-12">
                                                <label for="">Shop Address</label>
                                                <input type="text" name="Shop_Address" value="<?php echo $Shop_Address;?>" placeholder="Shop Address" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Opening Time</label>
                                                <input type="time" name="Shop_OpenTime" value="<?php echo $Shop_OpenTime;?>" placeholder="Shop Opening TIme*" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Shop Closing Time</label>
                                                <input type="time" name="Shop_CloseTime" value="<?php echo $Shop_CloseTime;?>" placeholder="Shop Closing Time*" required>
                                            </div>
                                            <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Select State</label>
                                                <input type="text" name="" value="<?php echo $Shop_State; ?>" placeholder="Shop location" disabled="disabled" required>
                                                <select class="form-select" id="validationDefault04" name="Shop_State" required>
                                                        <option value=""> --Select One--</option>
                                                            <?php
                                                                for ($i=1; $i <=$rowcount ; $i++) { 
                                                                    $row = mysqli_fetch_array($query);
                                                            ?>
                                                            <option><?php echo $row['State_name']?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        
                                                    </select>
                                            </div>
                                           
                                           <!--Form Group-->
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">City</label>
                                                <input type="text" name="Shop_City" value="<?php echo $Shop_City; ?>" placeholder="City" >
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Zip Code</label>
                                                <input type="text" name="Shop_ZipCode" value="<?php echo $Shop_ZipCode; ?>" placeholder="Zip Code" required>
                                                   
                                            </div>
                                            <!--Form Group-->
                                            
                                                                                    
                                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                                 <button type="submit" name="submit" class="btn btn-primary login_btn">Submit Shop Details</button>
                                            </div>
                                        </form>
                                    </div>
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