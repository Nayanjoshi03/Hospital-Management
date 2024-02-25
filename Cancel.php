<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancled</title>
</head>

<body>
    <?php
    $id = $_GET["id"];
    $con = mysqli_connect("localhost", "root", "", "hospital");
    if (mysqli_connect_errno()) {
        echo "Error  connecting to database" . mysqli_connect_error();
    }
    $sql = "update book_appointment set Appointment_Status='Canceled' where Appointment_id=" . $id;
    mysqli_query($con, $sql);

    echo "<h1>Your Booking has been Cancled</h1>";
    ?>
    <script>
        setTimeout(() => {
            window.location.href = 'home.php';
        }, 2000)

    </script>

</body>

</html>