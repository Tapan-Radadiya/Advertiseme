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
if(isset($_POST['submit'])){

    $Cust_name = $_POST['Cust_name'];
    $Cust_pass = $_POST['Cust_pass'];
    $Cust_email = $_POST['Cust_email'];
    $Cust_mob = $_POST['Cust_mob'];

    $sql1="SELECT *FROM customer ORDER BY Cust_Id DESC LIMIT 1;";
    $res1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($res1) == 0){
        $cust_id=1;
    }else{
        $data=mysqli_fetch_row($res1);
        $cust_id=$data[0]+1;
    }

    if (isset($_REQUEST['Check1'])==False){  
        $errors['error3'] = "Please agree to terms and condition";  
    }
    if(!email_validation($Cust_email)) {
        $errors['email']="Invalid Email Address!";
        }else{
            $email_check = "SELECT * FROM customer WHERE Customer_Email = '$Cust_email'";
            $res = mysqli_query($conn, $email_check);
            if(mysqli_num_rows($res) != 0){
                $errors['email'] = "Email that you have entered is already exist!";
            }
        }

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $Cust_pass);
    $lowercase = preg_match('@[a-z]@', $Cust_pass);
    $number    = preg_match('@[0-9]@', $Cust_pass);
    $specialChars = preg_match('@[^\w]@', $Cust_pass);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Cust_pass) < 8) {
      $errors['strongpass']="Password More than 8 characters.Must Include Uppercase letter, one number and One special character.";
    }

    if(!validate_mobile($Cust_mob)){
        $errors['mobil']="Enter A Mobil Number  10 digit!";
    }
    
    if(count($errors) === 0){
        $sql = "INSERT INTO customer(Cust_Id,Cust_UserName,Cust_Password,Customer_Email,Cust_MobileNo)
        VALUES ('$cust_id','$Cust_name','$Cust_pass','$Cust_email','$Cust_mob')";
        $chek_insert = mysqli_query($conn, $sql);
        if($chek_insert){
            $_SESSION['cust_email']=$Cust_email;
            $_SESSION['cust_pass']=$Cust_pass;
            header('Location:index.php');
            exit();
        }else{
            $errors['db-error'] = "Server problem ! Please try again after some time.";
        }
    }
}


// Function to validate email using regular expression
function email_validation($str) {
    return (!preg_match(
  "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str))
        ? FALSE : TRUE;
  }
function validate_mobile($mobile)
  {
    return preg_match('/^[0-9]{10}+$/', $mobile);
  }
$conn->close();  
?>