<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>AdvertiseMe | Home</title>
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
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive2.css" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
<script src='../../../google_analytics_auto.js'></script></head>
<?php
 	$con = mysqli_connect("localhost","root","","advertise_me") or die ("Cannot able to connect");
    
    $query = mysqli_query($con,"SELECT * FROM state");
    $rowcount = mysqli_num_rows($query);
    
    $shop_counter = mysqli_query($con,"SELECT * FROM shop_details");
    $counter = mysqli_num_rows($shop_counter);

    $cus_counter = mysqli_query($con,"SELECT * FROM customer");
    $cus_counter = mysqli_num_rows($cus_counter);
    
    $query1 = mysqli_query($con,"SELECT * FROM category");
    $rowcount1 = mysqli_num_rows($query1);
?>
<script src="http://schauhan.in/Examples/ecommerce_product_slider/jquery-3.5.1.js" ></script>
<script src="http://schauhan.in/Examples/ecommerce_product_slider/lightslider.js" ></script>
<script>
	  $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });
	</script>
<style>
    .sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 5; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
    
  background-color: white; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: inline-block;
  letter-spacing:2px;
  transition: 0.3s;
  display:block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: black;
  background-color:#d1f2fa;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.Imagetitle{
    height: 85px;
    position: relative; 
    width: 100px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.sinv{
    font-family:monospace;
}
.slide_img{
    height:80px;
    width:25px;
    
}
.slider{}
</style>
<script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>

<body>
    <script>
        window.addEventListener('mouseup',function(event){
            var side = document.getElementById('mySidenav');
            if(event.target != mySidenav){
                document.getElementById("mySidenav").style.width = "0";
            }
        });
        </script>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" id="close" onclick="closeNav()">&times;</a>
  <a href="http://localhost/Adme/category_s hop.php?Category=Auto care" class="sinv">&nbsp;Auto care</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Automobile" class="sinv">&nbsp;Automobile</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Baby Care" class="sinv">&nbsp;Baby Care</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Banquets" class="sinv">&nbsp;Banquets</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Bills & Recharge" class="sinv">&nbsp;Bills & Recharge</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Book Hotel" class="sinv">&nbsp;Book Hotel</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Book Shop" class="sinv">&nbsp;Book Shop</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Cabs & Car rentals" class="sinv">&nbsp;Cabs & Car rentals</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Caterers" class="sinv">&nbsp;Caterers</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Chemists" class="sinv">&nbsp;Chemists</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Civil Contractors" class="sinv">&nbsp;Civil Contractors</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Courier" class="sinv">&nbsp;Courier</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Daily Needs" class="sinv">&nbsp;Daily Needs</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Dance & Music" class="sinv">&nbsp;Dance & Music</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Doctor" class="sinv">&nbsp;Doctor</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Education" class="sinv">&nbsp;Education</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Emergency" class="sinv">&nbsp;Emergency</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Event Organizer" class="sinv">&nbsp;Event Organizer</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Fitnes" class="sinv">&nbsp;Fitnes</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Flights" class="sinv">&nbsp;Flights</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Foreign Exchange" class="sinv">&nbsp;Foreign Exchange</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Flowers" class="sinv">&nbsp;Flowers</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Home Decor" class="sinv">&nbsp;Home Decor</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Home Improvements" class="sinv">&nbsp;Home Improvements</a>
    <a href="http://localhost/Adme/category_shop.php?Category=Hospitals" class="sinv">&nbsp;Hospitals</a>

</div>

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/ezgif.com-gif-maker.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Header Wrapper Start -->
    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                             <a href="index.php"><img src="images/header/logo.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                                 <ul class="float_left">
                                        <!-- mega menu start -->

                                    <li class="parent"><a href="index.php">Home</a></li>
                                    <li class="gc_main_navigation parent"><a href="#" class="gc_main_navigation" onclick="openNav()">Category</a></li>  
                                    <li class="gc_main_navigation parent"><a href="aboutus.php" class="gc_main_navigation">About Us</a></li>
                                    <li class="gc_main_navigation parent"><a href="contactus.php" class="gc_main_navigation">Contact</a></li>
                                </ul>
                            </div>
                            <!-- mainmenu end -->
                            <!-- mobile menu area start -->
                            <header class="mobail_menu">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="gc_logo">
                                                <a href="index.php"><img src="images/header/logo.png" alt="Logo" title="Grace Church"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                    <!-- mobile menu area end -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="jp_navi_right_btn_wrapper">
                            <ul>
                                <?php
                                   if(isset($_SESSION['ShopOwner_email']) && isset($_SESSION['Shop_Pass'])){
                                ?>
                                <li><a href="PHP/logout.php">&nbsp;Logout </a></li>
                               
                                    <li><a href="shopowner_deshbord.php">&nbsp;Deshbord</a></li>
                                <?php     
                                   }else if(isset($_SESSION['cust_email']) && isset($_SESSION['cust_pass'])){
                                ?>
                                <li><a href="PHP/logout.php">&nbsp;Logout </a></li>
                                <?php
                                   }else{
                                ?>
                                    <li><a href="Customer_login.php">&nbsp;Customer Login </a></li>
                                    <li><a href="registershop.php">&nbsp;Register Shop</a></li>
                                <?php
                                   }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1>Search <span>Shop</span> Here</h1>
                                <p>Find Shop & Services</p>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="index.php" >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <!--<i class="fa fa-dot-circle-o first_icon"></i>-->
                                    <select class="form-select" id="validationDefault04" name="Shop_Type" required>
                                       <option value=""> --Select-- Shop Type</option>
                                            <?php
                                                for ($i=1; $i <=$rowcount1 ; $i++) { 
                                                    $row = mysqli_fetch_array($query1);
                                            ?>
                                            <option><?php echo $row['Category_Name']?></option>
                                            <?php
                                                }
                                            ?>
                                                       
                                            </select><i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li ><input type="submit" name="search" value="Search" style="background-color: dodgerblue;color:#fff;"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    </form> 
                </div>
            </div>
        </div>
        
    </div>
    <!-- Header Wrapper End -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">      
                     <div class="jp_hiring_slider_main_wrapper">
                        <div class="jp_hiring_heading_wrapper">
                            <h2>Top Rated Shops</h2>
                        </div>
                        <div class="jp_hiring_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <?php
                                   $sql="SELECT * FROM `feedback`";
                                   $result=mysqli_query($con, $sql);
                                   $array1=array();
                                   while($test = mysqli_fetch_row($result)){
                                       $shop_id=$test[2];
                                       $sql2="SELECT * FROM `feedback` WHERE Shop_Id='$shop_id'";
                                       $result2=mysqli_query($con, $sql2);
                                       $array2=array();
                                       while($test2 = mysqli_fetch_row($result2)){
                                           $rating=$test2[3];
                                           $array2[]=$rating;
                                           $array1[$shop_id]=$array2;
                                       }
                                    }
                                    foreach($array1 as $x => $x_value){
                                       $id=$x;
                                       $n=count($array1[$x]);
                                       $total=0;
                                       for($i=0;$i<$n;$i++){
                                         $total += $array1[$x][$i];
                                       } 
                                       $rt=$total/$n;
                                       if($rt >= 4 || $rt == 5){
                                       $sql3="SELECT * FROM shop_details WHERE Shop_Id='$id'";
                                       $result3=mysqli_query($con,$sql3);
                                       while($test3= mysqli_fetch_row($result3)){
                                            $shop_name=$test3[2];
                                            $shop_type=$test3[3];
                                            $shop_img1=$test3[18];
                                        }
                                ?>
                                <div class="item">
                                    <div class="jp_hiring_content_main_wrapper">
                                        <div class="jp_hiring_content_wrapper">
                                            <img src="shopimg/<?php echo $shop_img1;?>" alt="Shop logo" style="width:45px;height:70px;"/>
                                            <h4 style="margin-bottom:5px;width:125px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo $shop_name; ?></h4>
                                            <span style="padding:1px 5px 1px 5px;border:1px solid green;border-radius:12px;color:black;"><?php echo $rt; ?><i class="fa fa-star ck" style="color:orange;margin-left:3px;"></i></span>
                                            <p><?php echo $n; ?> User</p>
                                            <p><?php echo $shop_type; ?></p>
                                            <ul>
                                                <li><a href="Shop_details.php?Shop_Id=<?php echo $id; ?>">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><?php }
                                }?>
                                </div>
                            </div>
                        </div>                                           
                    </div>
<!-- jp listing sidebar Wrapper Start -->
<section style="display:block;" class="slider">

<div class="jp_listing_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_listing_heading_wrapper">
                    <h2>Find Your <span>Shop</span> Category Here</h2>
                </div>
            </div>
            <?php
            if(isset($_POST['search'])){
                $Shop_Type=$_POST['Shop_Type'];
                $sql="SELECT * FROM shop_details WHERE Shop_Type LIKE '%$Shop_Type%'";
                $result=mysqli_query($con, $sql);
                $Shop_Type2=array();
              while($test = mysqli_fetch_row($result))
              {
                $Shop_Type=$test[3];
                $Shop_Type2[$Shop_Type]=0;
              }
              foreach($Shop_Type2 as $x=>$value){
            ?>
            <li class="item-a">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_job_post_side_img">
                                    <img src="images/content/Home_cleaning.jpg" alt="post_img" style="height: 85px; position: relative; width: 100px;"/>
                                </div>
                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                    <h4><?php echo $x ?></h4>
                                    <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                        <ul>
                                            <li><a href="category_shop.php?Category=<?php echo $x; ?>">View Shops</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="jp_job_post_keyword_wrapper">
                        <ul>
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">,</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <?php 
              }
            }
            else{
                 $category=array('Hospitals','Fitnes','Book Shop','Bills & Recharg');
                 foreach($category as $x){
              ?>
            <div role="table1" id="trend">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                        <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_job_post_side_img">
                                        <img src="images/content/Home_cleaning.jpg" alt="post_img" style="height: 85px; position: relative; width: 100px;"/>
                                    </div>
                                    <div class="jp_job_post_right_cont jp_job_post_grid_right_cont jp_cl_job_cont">
                                        <h4><?php echo $x; ?></h4>
                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper jp_cl_aply_btn">
                                            <ul>
                                                <li><a href="category_shop.php?Category=<?php echo $x; ?>">View Shops</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="jp_job_post_keyword_wrapper">
                        <ul>
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#"></a></li>
                            <li><a href="#">,</a></li>
                        </ul>
                    </div>-->
                    </div>
                </div>
            </div>
              </li>
            <?php }
               }
            ?>
            <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                <div class="pager_wrapper gc_blog_pagination">
                    <ul class="pagination">
                        <li><a href="#">Priv.</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>-->   
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                <div class="pager_wrapper gc_blog_pagination">
                    <ul class="pagination">
                        <li><a href="#">Priv.</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="hidden-xs"><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- jp listing sidebar Wrapper End -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="jp_register_section_main_wrapper">
        <div class="jp_regis_left_side_box_wrapper">
            <div class="jp_regis_left_side_box">
                <img src="images/content/15595537.jpg" alt="icon" />
                <h4>I’m an SHOPOWNER</h4>
                <p>Register Your Shop To Advertise It<br>    In Your Nearby.</p>
                <ul>
                    <li><a href="registershop.php"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS SHOPOWNER</a></li>
                </ul>
            </div>
        </div>
        <div class="jp_regis_right_side_box_wrapper">
            <div class="jp_regis_right_img_overlay"></div>
            <div class="jp_regis_right_side_box">
                <img src="images/content/30034967.jpg" alt="icon" />
                <h4>I’m an coustomer</h4>
                <p>Sign In As A Customer To See All Shops Detail's </br>Like Shop Mobile-No,Shop Location And Many More.</p>
                <ul>
                    <li><a href="Customer_register.php"><i class="fa fa-plus-circle"></i> &nbsp;REGISTER AS COUSTOMER</a></li>
                </ul>
            </div>
            <div class="jp_regis_center_tag_wrapper">
                <p>OR</p>
            </div>
        </div>

    </div>
</div>
    <!-- jp counter Wrapper Start -->
    <div class="jp_counter_main_wrapper">
        <div class="container">
            <div class="gc_counter_cont_wrapper">
                <div class="count-description">
                    <span class="timer"><?php echo $counter?></span><i class="fa fa-plus"></i>
                    <h5 class="con1">Shop Available</h5>
                </div>
            </div>
            <div class="gc_counter_cont_wrapper2">
                <div class="count-description">
                    <span class="timer"><?php echo $cus_counter?></span><i class="fa fa-plus"></i>
                    <h5 class="con2">Coustomer</h5>
                </div>
            </div>
        </div>
    </div>
<div>
</br>
</div>
</div>
    <!-- jp Client Wrapper End -->
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
                                        <li><a href="deleteaccount.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Delete Account</a></li>
                                        
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
    <script src="js/custom.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 06:23:18 GMT -->
</html>