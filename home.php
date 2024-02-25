<?php
session_start();
function Dup_check($email) // garbage code 
{
    $conn = mysqli_connect("localhost", "root", "", "hospital");
    if (mysqli_connect_errno()) {
    } else {

    }
}

require "button.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/button.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: content-box;
            font-family: Domaine Display;
        }

        .mg-3 {
            margin-top: 5px;
        }

        #text p,
        #text span {
            font-size: 46px;
            color: #008565;
        }

        #text span {
            color: #ee510c;
        }

        .sepcolor {
            color: #ee510c;
            font-weight: 500;
        }

        .wrapper {
            overflow: hidden;
            height: 7vh;
        }

        .wrapper span {
            display: block;
            transition: linear;
            animation: spin_words 6s infinite;

        }

        @keyframes spin_words {
            10% {
                transform: translateY(-112%);
            }

            25% {
                transform: translateY(-100%);
            }

            35% {
                transform: translateY(-212%);
            }

            50% {
                transform: translateY(-200%);
            }

            60% {
                transform: translateY(-312%);
            }

            75% {
                transform: translateY(-300%);
            }

            85% {
                transform: translateY(-412%);
            }

            100% {
                transform: translateY(-400%);
            }
        }

        .lable {
            text-align: center;
            background-color: #008565;
            color: white;
            height: 5vh;
            font-size: 32px;

        }

        #sec3 {
            margin-top: 5vh;
        }

        #sec3 p {
            margin-top: 5vh;
        }

        #section3 p {
            margin-top: 1vh;

        }

        #bag {
            position: fixed;
            bottom: 105px;
            left: 83%;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            background-color: #008565;
            border: 2px solid white;
            outline: 2px solid #008565b0;

        }
    </style>
    <script src="https://kit.fontawesome.com/5971317d29.js" crossorigin="anonymous"></script>
    <script src="js/button.js"></script>
</head>

<body>
    <?php
    //Data from sign form 
    if (isset($_POST["fname"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $_SESSION["email"] = $email;


        $con = mysqli_connect("localhost", "root", "", "hospital"); // connection made change the localahost to server
        if (mysqli_connect_errno()) {
            echo "Cannot connect to server " . mysqli_error($con);
            header("Location:index.php?error=1");
            exit();
        }

        $sql = "INSERT INTO `users`(`First_Name`, `Last_Name`, `Phone_number`, `Email`, `Password`) VALUES ('$fname','$lname','$number','$email','$pass')";
        if (mysqli_query($con, $sql)) {
            echo "<script type='text/javascript'>asyn alert('user created successfully');</script>";
        } else {
            header("Location:index.php?error=2");
            exit();
        }

        mysqli_close($con);
        include "function/auth_code.php"; // This code is generation the auth code and storeing it in database 
    }
    include "nav.php";

    require "button.php";
    ?>
    <section class="flexr mg-3">
        <div id="text">
            <p>
                The next generation Care for
            </p>
            <p>
                your family with the best
            </p>
            <div class="wrapper sepcolour">
                <span id="textchange" class="sepcolor">Doctor</span>
                <span class="sepcolor">Infrastructure</span>
                <span class="sepcolor">Medical Staff</span>
                <span class="sepcolor">Surgens</span>
                <span class="sepcolor">Doctor</span>
            </div>
        </div>
        <div>
            <img src="images/family.png" alt="Family photo">
        </div>
    </section>
    <div class="lable">
        India's Most Prestigious Medical facility
    </div>

    <section id="sec3">
        <p class="center text-xx color">Why we not other's</p>
        <p class="center text-xx width-x">
            Co Care’s pioneering virtual care model is built around women and families, delivering better outcomes and
            lower costs for everyone.
        </p>
        <p class="center">
            We’re setting a new standard of care for families across geographies, cultures, and backgrounds.
        </p>
        <div class="flexr" id="section3">
            <div>
                <img src="images\hands-holding-heart-svgrepo-com.svg" alt="hand with heart - icon ">
                <p class="sepcolor septext">Whole-Family care</p>
                <p class="septext">A holistic approach that offers comprehensive care for all families.</p>
            </div>
            <div>
                <img src="images\trophy-svgrepo-com.svg" alt="trophy-icon">
                <p class="sepcolor septext">Exceptional outcomes</p>
                <p class="septext">Dedicated Care Advocates and data-driven insights deliver better outcomes.</p>
            </div>
            <div>
                <img src="images\money-bag-svgrepo-com.svg" alt="moneybag - icon">
                <p class="sepcolor septext">Lower costs</p>
                <p class="septext">Proactive intervention reduces the need for costly procedures.</p>
            </div>
        </div>

    </section>
    <section id="sec4">
        <p class="center text-xx">Our Services</p>
        <div class="card-container">
            <div class="card">
                <h2 class="sepcolor">Emergency Care</h2>
                <p>It is the ‘Golden Hour‘ and the ‘Platinum Ten Minutes‘ that typify the significance of Emergency
                    Medical Services. It is a well-accepted fact that a patient who receives basic care from trained
                    professionals and is transported to the nearest healthcare facility within 15-20 minutes of an
                    emergency has the greatest chance of survival. Hence, we at Apollo Hospitals leave no stone ... </p>
            </div>
            <div class="card">
                <h2 class="sepcolor">Cardiology</h2>
                <p>Co Care is a well-known name in Cardiac & Cardiology hospitals and the Best Heart Hospital in India.
                    The scorecard reveals a record-breaking total of more than 2,00,000 heart operations including
                    difficult coronary artery bypass procedures, surgery for all forms of valvular heart disease, infant
                    and neonatal heart operations – all with success rates that are on line with international norms.
                </p>
            </div>
            <div class="card">
                <h2 class="sepcolor">Oncology</h2>
                <p>Co Care is the best cancer hospital in Delhi. The Apollo Cancer center is a comprehensive
                    multidisciplinary institute, of Indraprastha Apollo Hospitals which brings together the most
                    advanced technology and highly qualified healthcare specialists under one roof.</p>
            </div>
            <div class="card">
                <h2 class="sepcolor">Gastroenterology</h2>
                <p>Department of Gastroenterology & Hepatology at Co Care provides excellent facilities for the
                    diagnosis, treatment and prevention of diseases of the digestive tract and liver. Patients having
                    gastric, small bowel, colon, liver, pancreatic & biliary tract diseases undergo evaluation and
                    management by skilled and experienced gastroenterologists here.</p>
            </div>
            <div class="card">
                <h2 class="sepcolor">Neuroscience</h2>
                <p>The Co Care Neuroscience institute is amongst our centers of excellence, providing the highest levels
                    of professional expertise and leadership through a Galaxy of eminent faculty in the field of
                    Neurology, Neurosurgery, Neuro Anesthesia, Neurophysiology, Neuro Psychology, and Interventional
                    Neurology along with rehabilitation </p>
            </div>
            <div class="card">
                <h2 class="sepcolor">Orthopedic</h2>
                <p>The Co Care Department of Orthopaedics is at the forefront in offering the latest in orthopaedic
                    treatments and surgical techniques. The center performs surgical procedures which include the most
                    current arthroscopic and reconstructive techniques – including major joint replacements including
                    the hip resurfacing and shoulder surgeries, arthroscopies, laminectomies, the most delicate hand
                    surgeries </p>
            </div>

        </div>
    </section>
    <!-- <button id="button">Talk to a doctor</button> -->
    <!-- <button id="button1"><a href="Appointment.php"> Book an Appointment </a></button> -->
    <?php
    include "button.php";
    ?>
    <?php
    include "footer.php";
    ?>


    <script src="index.js"></script>
    <script>
        //const tc = document.getElementById("textchange");
        let t = ["Infrastructure", "Medical Staff", "Surgens"];
        let i = 0;
        setInterval(() => {
            if (i == (t.length - 1)) {
                tc.innerText = t[i];
                i = 0;
            }
            else {
                tc.innerText = t[i];
                i = i + 1;
            }
        }, 3000);
    </script>
</body>

</html>