<?php 
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

    if(isset($_POST['save'])){
        $email=$_POST['forget_email'];
        $password=$_POST['forget_pass'];
        $password2=$_POST['forget_pass2'];

        if($password == $password2){
            $check_email = "SELECT * FROM customer WHERE Customer_Email = '$email'";
            $res = mysqli_query($conn, $check_email);
            if(mysqli_num_rows($res) > 0){
                $fetch = mysqli_fetch_assoc($res);
                $fetch_id = $fetch['Cust_Id'];
                $sql="UPDATE `customer` SET `Cust_Password` = '$password' WHERE `customer`.`Cust_Id` = $fetch_id";
                $result=mysqli_query($conn,$sql);
                if($result){
                     header('Location:Customer_login.php');
                }else{
                    $errors['update']="Password can't change!";
                }
            }else{
                $check_email2 = "SELECT * FROM shop_details WHERE ShopOwner_email = '$email'";
                $res2 = mysqli_query($conn, $check_email2);
                if(mysqli_num_rows($res2) > 0){
                    $fetch = mysqli_fetch_assoc($res2);
                    $fetch_id = $fetch['Shop_Id'];
                    $sql="UPDATE `shop_details` SET `Shop_Pass` = '$password' WHERE `shop_details`.`Shop_Id` = $fetch_id";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                         header('Location:shopownerlogin.php');
                    }else{
                        $errors['update']="Password can't change!";
                    }
                }else{
                    $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
                }
            }
        }else{
            $errors['pass']="Password Not a Same ! Please Renter Password";
        }
    }
?>