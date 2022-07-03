<?php
session_start();
if(isset($_SESSION['count'])){
    $sesscount = $_SESSION['count'];
}
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

if(isset($_POST['submit'])){
    $ShopOwner_Name = $_POST['ShopOwner_Name'];
    $Shop_Name = $_POST['Shop_Name'];
    $Shop_Type = $_POST['Shop_Type'];
    $Password1 = $_POST['Password1'];
    $Shop_Pass = $_POST['Shop_Pass'];
    $ShopOwner_email = $_POST["ShopOwner_email"];
    $Shop_Address = $_POST['Shop_Address'];
    $Shop_OpenTime = $_POST['Shop_OpenTime'];
    $Shop_CloseTime = $_POST['Shop_CloseTime'];
    $Shop_PhoneNo = $_POST['Shop_PhoneNo'];
    $Shop_Location = $_POST['Shop_Location'];
    $Shop_State = $_POST['Shop_State'];
    $Shop_City = $_POST['Shop_City'];
    $Shop_ZipCode = $_POST['Shop_ZipCode'];
    $About_Shop = $_POST['About_Shop'];

        $file_name1 = $_FILES['shopimg1']['name'];
        $file_type1 = $_FILES['shopimg1']['type'];
        $file_tem_loc1 = $_FILES['shopimg1']['tmp_name'];
        $file_store1="shopimg/".$file_name1;
        move_uploaded_file($file_tem_loc1,$file_store1);

        $file_name2 = $_FILES['shopimg2']['name'];
        $file_type2 = $_FILES['shopimg2']['type'];
        $file_tem_loc2 = $_FILES['shopimg2']['tmp_name'];
        $file_store2="shopimg/".$file_name2;
        move_uploaded_file($file_tem_loc2,$file_store2);

        $file_name3 = $_FILES['shopimg3']['name'];
        $file_type3 = $_FILES['shopimg3']['type'];
        $file_tem_loc3 = $_FILES['shopimg3']['tmp_name'];
        $file_store3="shopimg/".$file_name3;
        move_uploaded_file($file_tem_loc3,$file_store3);

        $file_name4 = $_FILES['shopimg4']['name'];
        $file_type4 = $_FILES['shopimg4']['type'];
        $file_tem_loc4 = $_FILES['shopimg4']['tmp_name'];
        $file_store4="shopimg/".$file_name4;
        move_uploaded_file($file_tem_loc4,$file_store4);

        $file_name5 = $_FILES['shopimg5']['name'];
        $file_type5 = $_FILES['shopimg5']['type'];
        $file_tem_loc5 = $_FILES['shopimg5']['tmp_name'];
        $file_store5="shopimg/".$file_name5;
        move_uploaded_file($file_tem_loc5,$file_store5);


    if($Password1 != $Shop_Pass){
        $errors['error']= "both password must be same";
    }
    /*else if (!preg_match ("/^[a-zA-z]*$/", $ShopOwner_Name,$Shop_Name) ) {  
            $errors['error1'] = "Only alphabets and whitespace are allowed.";  
        }*/
    else if (!filter_var($ShopOwner_email, FILTER_VALIDATE_EMAIL) ) {  
            $errors['error2'] = "Invalid email format";  
        }
    /*else if (!filter_var($ShopOwner_email, FILTER_VALIDATE_URL) ) {  
            $errors['error'] = "Invalid URL format";
        }  */
    else if (isset($_REQUEST['Check1'])==False){  
            $errors['error3'] = "Please agree to terms and condition";  
        }
    else{

        $sql = "INSERT INTO shop_details(ShopOwner_Name,Shop_Name,Shop_Type,Shop_Pass,ShopOwner_email,Shop_Address,Shop_OpenTime,Shop_CloseTime,Shop_PhoneNo,Shop_Location,Shop_State,Shop_City,Shop_ZipCode,About_Shop,shop_img1,shop_img2,shop_img3,shop_img4,shop_img5)
        VALUES ('$ShopOwner_Name','$Shop_Name','$Shop_Type','$Shop_Pass','$ShopOwner_email','$Shop_Address','$Shop_OpenTime','$Shop_CloseTime','$Shop_PhoneNo','$Shop_Location'
            ,'$Shop_State','$Shop_City','$Shop_ZipCode','$About_Shop','$file_name1','$file_name2','$file_name3','$file_name4','$file_name5')";
            
        if ($conn->query($sql) === TRUE) 
            {	
               $_SESSION['ShopOwner_email']=$ShopOwner_email;
                $_SESSION['Shop_Pass']=$Shop_Pass;
                header("location:pricing.php");
                

            }
        else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
    }
}
$conn->close();  
?>