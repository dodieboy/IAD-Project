<?php
//SPDX-Short-Identifier: MIT
//(c) 2021 Alan Tan
//This code is licensed under MIT license (See LICENSE.txt for details)
include 'main.php';

$UUsername = $_POST["username"];
$tb = 'user';

$sql = "DELETE FROM `user` WHERE `Username` = '$UUsername'";

if ($conn->query($sql) == TRUE) {
   print("User Deleted Successfully");
}
else{
    print("Error!!!");
}
?>