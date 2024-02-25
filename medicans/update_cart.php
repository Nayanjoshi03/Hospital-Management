<?php

$product = $_POST["product_id"];
$email = $_POST["email"];
$con = mysqli_connect("localhost", "root", "", "hospital");
$sql = `INSERT INTO cart(Email, Product_id, Quantity) VALUES ('{$email}','{$product}','1')`;
mysqli_query($con, $sql);
?>

?>