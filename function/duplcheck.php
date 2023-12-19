<?php
echo "submit";
$email = $_POST["email"];

$con = mysqli_connect("localhost", "root", "", "hospital"); // connection made change the localahost to server
if (mysqli_connect_errno()) {
    echo "Cannot connect to server " . mysqli_error();
    header("Location:index.php?error=1");
    exit();
}
$sql = "select * from users where Email=\"" . $email . "\"";
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