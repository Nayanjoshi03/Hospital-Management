<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit();
}
$con = mysqli_connect("localhost", "root", "", "hospital");
$email = $_SESSION["email"];
$sql = "SELECT `First_Name`, `Last_Name`, `Phone_number` FROM `users` WHERE Email='$email'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_array($result, 2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .stext {
            font-size: 46px;
            color: #008565;
        }

        .appoitmentbox {
            border: none;
            padding: 35px 0;
            background-color: #0085657a;
            border-radius: 10px;
            height: 10vh;
            font-size: 20px;
            margin: 2vh 5vw;
        }

        .appoitmentbox button {
            height: 40px;
            width: 100px;
            font-size: 20px;
            border-radius: 5px;


        }

        .appoitmentbox button[name="Cancel"] {
            background-color: #5e0707ed;
            border: none;
        }

        .appoitmentbox button[name="Reschedul"] {
            width: 110px;
            background-color: #008565;
            border: none;
        }

        .appoitmentbox button a {
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <section class="flexr">
        <img src="images/user.svg" height="450px">
        <?php
        echo "<div>";
        echo "<p class=\"septext stext\">HELLO " . strtoupper($data[0]) . " " . strtoupper($data[1]) . "</p>";
        echo "<div class=\"flexr\">";
        echo "<p>Phone number : </p>";
        echo "<p>$data[2]</p>";
        echo "</div>";

        echo "<div class=\"flexr\">";
        echo "<p>Email : </p>";
        echo "<p>$_SESSION[email]</p>";
        echo "</div>";

        echo "</div>";
        ?>
    </section>
    <section>
        <p class="text-xx septext lable center">Upcoming Appointments</p>
        <div>
            <?php
            $con = mysqli_connect("localhost", "root", "", "hospital");
            if (mysqli_connect_errno()) {
                echo "Error  connecting to database" . mysqli_connect_error();
            }
            $sql = "SELECT Appointment_id, First_Name,city,Department,Appointment_Time FROM `book_appointment` WHERE Email='" . $_SESSION["email"] . "' and Appointment_Status='Pending'";
            $data = mysqli_query($con, $sql);
            $result = mysqli_fetch_all($data);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            foreach ($result as $row) {
                echo '<div class="flexr  appoitmentbox">';
                echo '<span>' . $row[1] . '</span>';
                echo '<span>' . $row[2] . '</span>';
                echo '<span>' . $row[3] . '</span>';
                echo '<span>' . $row[4] . '</span>';
                echo '<button name="Cancel"><a href="Cancel.php?id=' . $row[0] . '">Cancel</a></button>';
                echo '<button name="Reschedul"><a href="Appointment.php?id=' . $row[0] . '">Reschedul</a></button>';
                echo '</div>';
            }

            ?>
        </div>

    </section>
</body>

</html>