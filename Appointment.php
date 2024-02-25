<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit();
}
$name = "";
$number = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $con = mysqli_connect("localhost", "root", "", "hospital");
    if (mysqli_connect_errno()) {
        echo "Error  connecting to database" . mysqli_connect_error();
    }
    $sql = "select First_Name,Phone_Number from book_appointment where  Appointment_ID='$id'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
    global $name;
    $name = $data['First_Name'];
    global $number;
    $number = $data['Phone_Number'];

    $sql = "update book_appointment set Appointment_Status='Rescheduled' where Appointment_id=" . $id;
    mysqli_query($con, $sql);

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cal.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5971317d29.js" crossorigin="anonymous"></script>
    <style>
        img {
            height: 90vh;
        }

        .mg-2 {
            margin: 2vh;

        }

        form div input {
            height: 40px;
            width: 250px;
            font-size: large;
            border-radius: 50px;
            padding: 10px;
        }

        select {
            background-color: #008565;
            text-align: center;
            color: white;
            padding: 12px;
            width: 250px;
            border: none;
            font-size: large;
            box-shadow: -3px 2px 11px rgba(0, 0, 0, 0.2);
            -webkit-appearance: button;
            appearance: button;
            outline: none;
            border-radius: 50px;
        }

        select[name="department"] {
            width: 500px;
        }

        #calander {
            width: 280px;
        }

        #time {
            display: grid;
            grid-template-columns: auto auto;
            justify-content: space-around;

        }

        #time button {
            color: #04755b;
            height: 25px;
            margin: 5px 15px;
            padding: 2px 8px;
            font-size: large;
            cursor: pointer;
            background-color: white;
            border: 2px solid #04755b;
            border-radius: 5px;
        }

        #time button:hover {
            outline: 3px solid #04755b;
        }

        input[type="submit"] {
            margin-top: 5vh;
            color: rgb(255, 255, 255);
            width: 500px;
            height: 50px;
            font-size: x-large;
            border-radius: 50px;
            background-color: #ee510c;
            border: 3px solid rgb(255, 255, 255);

        }

        input[type="submit"]:hover {
            outline: 5px solid #ee500cd5;
        }

        div[data-content="text"] {
            width: 250px;
            display: inline;
            text-align: center;
            color: red;
            font-size: 40px;
            overflow: auto;
            padding-top: 40px;
        }
    </style>
</head>

<body>
    <?php include "nav.php" ?>
    <!-- Main Content -->
    <section class="flexr">
        <img src="images/doctor.jpg" alt="doctor image">

        <form method="POST" action="confirmation.php" onsubmit="return submit()">
            <div class="mg-2">
                <input type="text" id="name" name="name" placeholder="Full Name" required value=<?php echo $name != "" ? $name : ""; ?>>
                <input type="text" id="number" name="number" placeholder="Phone Number" required value=<?php echo $number != "" ? $number : ""; ?>>
            </div>
            <div class=mg-2>
                <input type="text" id="name" name="country" value="India" disabled>
                <select select-tag name="city">
                    <option>Chandigarh</option>
                    <option>Mumbai</option>
                    <option>Delhi</option>
                    <option>Kolkata</option>
                </select>
            </div>
            <div class="mg-2">
                <select name="department">
                    <option value="Cardiology">Cardiology -deals the heart and the cardiovascular system</option>
                    <option value="Oncology">Oncology</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="Neuroscience">Neuroscience</option>
                    <option value="Orthopedic">Orthopedic</option>
                </select>
            </div>
            <div class="container">
                <div id="calander">
                    <div id="calheader">
                        <button id="back" onclick="monthdec()" type="button">&#9666; </button>
                        <span id="month">February</span>
                        <button id="next" onclick="monthinc()" type="button">&#9656;</button>
                    </div>
                    <div id="cal">
                    </div>
                </div>
                <div id="time">
                    <button type="button">09:00 AM</button>
                    <button type="button">09:30 AM</button>
                    <button type="button">10:00 AM</button>
                    <button type="button">10:30 AM</button>
                    <button type="button">11:00 AM</button>
                    <button type="button">11:30 AM</button>
                    <button type="button">12:00 PM</button>
                    <button type="button">12:30 PM</button>
                    <button type="button">01:00 PM</button>
                    <button type="button">01:30 PM</button>
                </div>
                <div style="display: none;">
                    <input type="text" id="appointment_date" name="appointment_date">
                </div>
            </div>
            <input type="submit" name="submit">
        </form>
    </section>
    <?php include "footer.php" ?>
    <script src="js/cal.js"></script>
    <script src="index.js"></script>
    <script>
        function submit() {
            if (dateset != "" && timeset != "") {
                return true
            }
            else {
                alert("Please select date and time");
                return false

            }
        }
    </>

</body >

</html >