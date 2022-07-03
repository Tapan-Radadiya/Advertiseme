<?php
    session_start();
    if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views'] + 1;
    }
    else {
    }
    
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
    if(isset($_POST['login'])){
        $email =$_POST['cust_email'];
        $password =$_POST['cust_pass'];
        $check_email = "SELECT * FROM customer WHERE Customer_Email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['Cust_Password'];
            if($password == $fetch_pass){
                $_SESSION['cust_email']=$email;
                $_SESSION['cust_pass']=$password;
                header('Location:index.php');
                exit();
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
?>