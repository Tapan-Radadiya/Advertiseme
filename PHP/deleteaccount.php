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
        $email=$_POST['delete_email'];
        $password=$_POST['delete_pass'];

            $check_email = "SELECT * FROM customer WHERE Customer_Email = '$email' AND Cust_Password='$password'";
            $res = mysqli_query($conn, $check_email);
            if(mysqli_num_rows($res) > 0){
                $fetch = mysqli_fetch_assoc($res);
                $fetch_id = $fetch['Cust_Id'];
                $sql="DELETE From customer WHERE Cust_Id = '$fetch_id'";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo '<script>alert("Your Customer Account Has Been Deleted")</script>';
                }else{
                    $errors['delete']="your account HAs not Been Deleted!";
                }
            }else{
                $check_email2 = "SELECT * FROM shop_details WHERE ShopOwner_email = '$email' AND Shop_Pass='$password'";
                $res2 = mysqli_query($conn, $check_email2);
                if(mysqli_num_rows($res2) > 0){
                    $fetch = mysqli_fetch_assoc($res2);
                    $fetch_id = $fetch['Shop_Id'];
                    $sql="DELETE From shop_details WHERE Shop_Id = '$fetch_id'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        echo '<script>alert("Your Shop Account Has Been Deleted")</script>';
                    }else{
                        $errors['update']="your account Has not Been Deleted";
                    }
                }else{
                    $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
                }
            }
    }
?>