<?php
include_once "booking_pdf.php";
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
//use Dompdf\Dompdf;
//use Dompdf\Options;

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5971317d29.js" crossorigin="anonymous"></script>

    <style>
        div {
            display: flex;
            width: 50vw;
            margin: auto;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        div p:first-child {
            font-size: 80px;
            text-align: center;
            color: #008565;
            margin-bottom: 20px;
        }

        div p {
            text-align: center;
            font-size: x-large;
        }

        img {
            max-height: 250px;
        }

        .footer {
            display: block;
            width: 100vw;
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        /*social media icons */
        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 36px;
        }

        .social-icons a:hover {
            color: #0077b5;
        }
    </style>
</head>

<body>
    <?php
    include "nav.php";
    use Dompdf\Dompdf;
    use Dompdf\Options;

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $number = $_POST["number"];
        //$country = $_POST["country"];
        $city = $_POST["city"];
        $dept = $_POST["department"];
        $appointment_date = ($_POST["appointment_date"]);
        $email = $_SESSION["email"];

        $con = mysqli_connect("localhost", "root", "", "hospital"); // connecting to Database
        if (!$con) {
            die("<b>Connection Failed! </b>" . mysqli_error($con));
        } else {
            $sql = "INSERT INTO `book_appointment`(`First_Name`, `Phone_number`, `Country`, `City`, `Department`, `Appointment_Time`,`Email`) VALUES ('$name','$number','India','$city','$dept','$appointment_date','$email')";
            if (mysqli_query($con, $sql)) {
                echo '<div>
                <p>
                  Thankyou
                  Your Appointment is Booked
                </p>
                <img src="images/tick.svg">
                <p>
                  After 5 sec you will be redrictied to home page
                  
                </p>
              </div>';
                create_pdf($name, $email, $city, $dept, $appointment_date, 0);
            } else {
                echo "<div>
                error in inserting data into database
                </div>";

            }
        }


    }
    ?>
    <script src="index.js"></script>
    <script>
        setTimeout(() => {
            window.location.href = 'booking_pdf.php?id=<?php echo $id; ?>';
        }, 1000);
        setTimeout(() => {
            window.location.href = 'home.php';
        }, 5000);
    </script>

</body>

</html>