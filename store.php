<?php
include 'main.php';
$tb = 'product';

$sql = "SELECT * FROM $tb";

$result = mysqli_query($conn, $sql);

$item = array();
for ($x = 0; $data = mysqli_fetch_array($result); $x++) {
    array_push($item,$data[1],$data[2]);
}
echo json_encode($item);
?>