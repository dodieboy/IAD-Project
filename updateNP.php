<?php
include 'main.php';
$tb = 'user';

$UUsername = $_POST["username"];
$UName = $_POST["fullname"];
$UEmail = $_POST["email"];
$UPhone = $_POST["phone"];
$UGender = $_POST["gender"];
$URole = $_POST["role"];

$sql = "UPDATE `user` SET `Name`='$UName',`Email`='$UEmail',`Gender`='$UGender',`Phone`='$UPhone',`Role`='$URole' WHERE `Username` = '$UUsername'";

if ($conn->query($sql) == TRUE) {
   print("User Updated Successfully");
}
else{
    $pos = strrpos($conn->error, "PRIMARY");
    $pos2 = strrpos($conn->error, "Email");
    if($pos == true){
       print("This Username is taken \nPlease pick another Username");
    }
    else if($pos2 == true){
       print("This Email is taken \nPlease pick another Email");
    }
    else{
    print("Error: ".$conn->error);
    }
 }
?>