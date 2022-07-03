<?php
echo "Hello PHP";
include('db.php');
if(isset($_POST['payment_id']) && isset($_POST['username']) && isset($_POST['useremail'])) 
{
    $payment_id = $_POST['payment_id'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $payment_status = "Complete";
    $added_on=date('Y-m-d h:i:s');
    $query = mysqli_query($conn,"INSERT INTO payment(username,useremail,payment_status,payment_id,added_on) VALUES('$username','$useremail','$payment_status','$payment_id','$added_on')");
   
    if($query == TRUE){
        echo "Data inserted";
    }
    else{
        echo "Data not inserted";
    }
}
?>