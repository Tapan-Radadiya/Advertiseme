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

    $query = "UPDATE shop_details SET ShopOwner_Name='$ShopOwner_Name',Shop_Name='$Shop_Name',Shop_Type='$Shop_Type',
                            Shop_Address='$Shop_Address',Shop_OpenTime='$Shop_OpenTime',Shop_CloseTime='$Shop_CloseTime',Shop_Location='$Shop_Location'
                            Shop_State='$Shop_State',Shop_City='$Shop_City',Shop_ZipCode='$Shop_ZipCode' where Shop_Id = '$Shop_Id'";
    $run_Sql = mysqli_query($conn, $query);
    
if($run_Sql) {
header("location:shopowner_deshbord.php");

}

}

?>