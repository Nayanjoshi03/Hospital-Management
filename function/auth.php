<?php
echo "submit";
$email = $_POST["email"];
$con = mysqli_connect("localhost", "root", "", "hospital");
$sql = "select Password from users where Email=\"" . $email . "\"";
$res = mysqli_query($con, $sql);
$arr = mysqli_fetch_row($res);
if ($_POST["password"] == $arr[0]) {
    header("Location:home.php");
    exit();
} else {
    header("Location:login.php?error=1");
    exit();

}


?>