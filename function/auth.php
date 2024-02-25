<?php
//

session_set_cookie_params(0, '/');
session_start();
$email = $_POST["email"];
$con = mysqli_connect("localhost", "root", "", "hospital");
$sql = "select Password from users where Email=\"" . $email . "\"";
$res = mysqli_query($con, $sql);
$arr = mysqli_fetch_row($res);
if ($_POST["password"] == $arr[0]) {
    $_SESSION["email"] = $email;
    session_encode();
    require "auth_code.php";
    header("Location:../home.php");
    exit();
} else {
    header("Location:../login.php?error=1", false);
    exit();

}


?>