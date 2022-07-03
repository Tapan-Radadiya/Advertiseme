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
    $errors=array();
    if(isset($_POST['shopowner_login'])){
        $ShopOwner_email =$_POST['ShopOwner_email'];
        $Shop_Pass =$_POST['Shop_Pass'];
        $check_email = "SELECT * FROM shop_details WHERE ShopOwner_email = '".$ShopOwner_email."'   AND Shop_Pass = '".$Shop_Pass."'limit 1";
        $res = mysqli_query($conn, $check_email);

        if(mysqli_num_rows($res) == 1){

            header("location:shopowner_deshbord.php");
            exit();
        }
        else{
            $errors['error']="Email or Password is wrong . please check!";
        }
    }
?>