<?php
$email = $_SESSION["email"];
$key = md5(uniqid(rand(), true));

$con = mysqli_connect("localhost", "root", "", "hospital");
$sql = "SELECT `Auth_key` from `auth` where `Email`='{$email}'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_array($result, 2);
if (empty($data)) {
    //this will run when the user sign up first time 
    setcookie("Auth_key", $key, time() + 60 * 60 * 24 * 30, "/covid");
    setcookie("Auth_key", $key, time() + 60 * 60 * 24 * 30, "/covid/function");
    $sql = "INSERT INTO `auth`(`Email`, `Auth_key`) VALUES ('$email','$key')";
    mysqli_query($con, $sql);

} else {
    // this code will effect when the user login 
    setcookie("Auth_key", $key, time() + 60 * 60 * 24 * 30, "/covid");
    setcookie("Auth_key", $key, time() + 60 * 60 * 24 * 30, "/covid/function");
    $sql = "UPDATE `auth` SET `Auth_key`='$key' WHERE `Email`= '{$email}'";
    mysqli_query($con, $sql);
}














?>