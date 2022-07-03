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

    if(!isset( $_SESSION['cust_email']) && !isset($_SESSION['cust_pass'])){
       header('Location:Customer_login.php');
    }else{
        $Shop_Id=$_REQUEST['Shop_Id'];
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
               $About_Shop= $test['About_Shop'];
               $shop_img1 = $test['shop_img1'];
               $shop_img2 = $test['shop_img2'];
               $shop_img3 = $test['shop_img3'];
               $shop_img4 = $test['shop_img4'];
               $shop_img5 = $test['shop_img5'];
             }
    }

    if(isset($_POST['review_btn'])){
        $feedback=$_POST['commentText'];

        if(isset($_POST['rating1'])){
            $rating=$_POST['rating1'];
        }elseif(isset($_POST['rating2'])){
            $rating=$_POST['rating2'];
        }elseif(isset($_POST['rating3'])){
            $rating=$_POST['rating3'];
        }elseif(isset($_POST['rating4'])){
            $rating=$_POST['rating4'];
        }elseif(isset($_POST['rating5'])){
            $rating=$_POST['rating5'];
        }


       $Customer_Email=$_SESSION['cust_email'];
       $Cust_Password=$_SESSION['cust_pass'];
        $sql1 ="SELECT * FROM customer WHERE Customer_Email = '".$Customer_Email."'   AND Cust_Password = '".$Cust_Password."'limit 1";
           $run_Sql1 = mysqli_query($conn, $sql1);
             if($test1 = mysqli_fetch_assoc($run_Sql1)){
                $Cust_UserName=$test1['Cust_UserName'];
             }

        $sql2 = "INSERT INTO feedback (Customer_UserName,Shop_Id,Feedback_Stars,Feedback)
        VALUES ('$Cust_UserName','$Shop_Id','$rating','$feedback')";
        mysqli_query($conn, $sql2);

    }
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>Shop details | <?php echo $Shop_Name; ?></title>
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
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<script src='../../../google_analytics_auto.js'></script>
</head>
<body>
    <!-- preloader Start 
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>-->
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
                                    <li class="has-mega gc_main_navigation"><a href="<?php echo $shop_img1?>" class="gc_main_navigation">
                                            Home</a>
                                    </li>
                                    <li class="gc_main_navigation parent"><a href="aboutus.php"
                                            class="gc_main_navigation">About Us</a></li>
                                    <li class="gc_main_navigation parent"><a href="contacctus.php"
                                            class="gc_main_navigation">Contact</a></li>
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
                                                            <a href="aboutus.php">Contact</a>
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
                                <li><a href="index.php"><i class="fa fa-plus-circle"></i>&nbsp;Home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper End -->
    <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper jp_cs_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2><?php echo $Shop_Name ; ?></h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><?php echo $Shop_Name ; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_cs_com_info_wrapper">
						<div class="jp_cs_com_info_img">
							<img src="shopimg/<?php echo $shop_img1;?>"style="height:150px; width:150px; " alt="job_img">
						</div>
						<div class="jp_cs_com_info_img_cont">
							<h2><?php echo $Shop_Name; ?></h2>
							<p><?php echo $ShopOwner_Name ; ?></p>
							<h3><i class="fa fa-map-marker"></i> &nbsp;&nbsp;<?php echo $Shop_Address; ?>, <?php echo $Shop_ZipCode ; ?></h3>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper1">
                        <div class="jp_job_des">
                             <div class="image-gallery">
                               <img src="shopimg/<?php echo $shop_img1; ?>" alt="">
                             </div>
                             <ul class="thumbnails">
                                <li>
                                   <a href="shopimg/<?php echo $shop_img1; ?>"><img src="shopimg/<?php echo $shop_img1; ?>" alt=""></a>  
                                </li>
                               <li>
                                   <a href="shopimg/<?php echo $shop_img2; ?>"><img src="shopimg/<?php echo $shop_img2; ?>" alt=""></a>
                               </li>
                               <li>
                                   <a href="shopimg/<?php echo $shop_img3; ?>"><img src="shopimg/<?php echo $shop_img3; ?>" alt=""></a>
                               </li>
                               <li>
                                   <a href="shopimg/<?php echo $shop_img4; ?>"><img src="shopimg/<?php echo $shop_img4; ?>" alt=""></a>
                               </li>
                               <li>
                                <a href="shopimg/<?php echo $shop_img5; ?>"><img src="shopimg/<?php echo $shop_img5; ?>" alt=""></a>
                              </li>
                             </ul>       
                        </div>
                    </div>
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>About Shop</h2>
                            <p><?php echo $About_Shop; ?></p>
                        </div>
                    </div>
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <section>
                                    <form method="post" action="#">
                                        <label>Your overall experience with us ?</label><br>
                                        <span class="star-rating">
                                          <input type="radio" name="rating1" value="1"><i></i>
                                          <input type="radio" name="rating2" value="2"><i></i>
                                          <input type="radio" name="rating3" value="3"><i></i>
                                          <input type="radio" name="rating4" value="4"><i></i>
                                          <input type="radio" name="rating5" value="5"><i></i>
                                        </span>
                                          <hr class="survey-hr"> 
                                          <label>Any Other suggestions:</label><br/><br/>
                                          <textarea cols="75" name="commentText" rows="5" placeholder="Write your feedback..."></textarea><br>
                                          <input type="submit" class="sbtn" name="review_btn" value="Submit your review">
                                    </form>
                            </section>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul class="hidden-xs">
                                <li>SHARE :</li>
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
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Shop Overview</h4>
                                </div>
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="shopimg/<?php echo $shop_img1; ?>" style="height=:100px; border-radius: 10%; width:150px;" alt="post_img" />
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4><?php echo $Shop_Name ; ?></h4>
                                        <p><?php echo $ShopOwner_Name ; ?></p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li>
                                            <?php
                                                 $sql3="SELECT * FROM feedback WHERE Shop_Id LIKE '%$Shop_Id%'";
                                                 $result1=mysqli_query($conn, $sql3);
                                                 if(mysqli_num_rows($result1) > 0){
                                                 $nostars=array();
                                                 while($test5 = mysqli_fetch_row($result1)){
                                                     $st=$test5[3];
                                                    $nostars[]=$st;
                                                }
                                                $n=count($nostars);
                                                $totalstar=0;
                                                for($i=0;$i<$n;$i++){
                                                    $totalstar += $nostars[$i];
                                                }
                                                ?>
                                                <label><?php echo $totalstar/$n; ?></label>
                                                <i class="fa fa-star ck"></i>
                                                <h5><?php echo $n; ?> User</h5>
                                                <?php
                                                }else{
                                                ?>
                                                <label>0</label>
                                                <i class="fa fa-star ck"></i>
                                                <h5>0 User</h5>
                                                <?php } ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li><?php echo $Shop_Address; ?>, <?php echo $Shop_ZipCode ; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Open time - Close time:</li>
                                                <li><?php echo $Shop_OpenTime; ?> - <?php echo $Shop_CloseTime ; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Email:</li>
                                                <li><?php echo $ShopOwner_email; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Contact No:</li>
                                                <li><?php echo $Shop_PhoneNo; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Google Map location:</li>
                                                <li><a href="<?php echo $ShopOwner_email; ?>" style="color:blue; word-wrap: break-word;"><?php echo $Shop_Location; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper2">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Customer review</h4>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper2">
                                <?php
                                    $sql3="SELECT * FROM feedback WHERE Shop_Id LIKE '%$Shop_Id%'";
                                    $result1=mysqli_query($conn, $sql3);
                                    while($test4 = mysqli_fetch_row($result1))
                                    {
                                        $name=$test4[1];
                                        $stars=$test4[3];
                                        $feedback=$test4[4];

                                        if($stars == 1){
                                            $color="red";
                                        }elseif($stars == 2){
                                            $color="red";
                                        }elseif($stars == 3){
                                            $color="orange";
                                        }elseif($stars == 4){
                                            $color="#26a541";
                                        }elseif($stars == 5){
                                            $color="#26a541";
                                        }
                                ?>
                                    <div class="user-feedback">
                                        <div class="name-hading">
                                            <div class="user-name">
                                                <h5><?php echo $name; ?></h5>
                                            </div>
                                            <div class="user-rating" style="background-color:<?php echo $color; ?> ;">
                                                <?php echo $stars; ?>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="feedback">
                                            <p><?php echo $feedback ?></p>
                                        </div>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <script>
        $(document).ready(function(){
            $('.thumbnails a').click(function(e){
              e.preventDefault();
        $('.image-gallery img').attr('src',$(this).attr('href'));
            })
          });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmdG8C6ItElq5ipuFv6O9AE48wyZm_vqU&amp;callback=initMap">
    </script>
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/company_listing_single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 06:31:08 GMT -->
</html>