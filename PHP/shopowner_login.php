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
    $errors=array();
    if(isset($_POST['shopowner_login'])){
        $ShopOwner_email =$_POST['ShopOwner_email'];
        $Shop_Pass =$_POST['Shop_Pass'];
        $check_email = "SELECT * FROM shop_details WHERE ShopOwner_email = '".$ShopOwner_email."'   AND Shop_Pass = '".$Shop_Pass."'limit 1";
        $res = mysqli_query($conn, $check_email);

        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['Shop_Pass'];

            if($Shop_Pass == $fetch_pass){
                $_SESSION['ShopOwner_email']=$ShopOwner_email;
                $_SESSION['Shop_Pass']=$Shop_Pass;
                header('Location:shopowner_deshbord.php');
            }else{
                $errors['email'] = "Incorrect email or password!";
            }

        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
?>