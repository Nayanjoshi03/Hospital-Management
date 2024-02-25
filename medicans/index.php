<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img {
            height: 30px;
        }

        #sec1 form {
            margin-top: 2vh;
            justify-content: center;


        }

        #sec1 form input {
            border: 2px solid black;
            border-radius: 20px;
            background: transparent;
            font-size: 30px;
            height: 40px;
            text-align: center;
        }

        #sec1 form input[type="text"] {
            padding-left: 30px;
        }

        #sec1 form input[type="submit"] {
            margin-left: 10vw;
            padding: 0 15px;
            border-radius: 10px;
            background-color: #008565;
            color: white;


        }

        #sec1 form input:active {
            border: none;
            background: transparent;
        }

        #sec2 {
            display: grid;
            grid-template-columns: auto auto auto;
            margin: 7vh 10vw;
        }

        .med-card {
            display: flex;
            width: 300px;
            border: 1px solid #7ab6a8;
            flex-direction: column;
            padding: 15px;
            margin-bottom: 4vh;
            border-radius: 6px;

        }

        .med-card img {
            height: 100px;
        }

        .button {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button {
            width: 100px;
            height: 30px;
            font-size: large;
        }

        .sepcolor {
            color: #008595;
            font-weight: 600;
        }

        .normalcolor {
            color: 3857f8;
        }

        button[type="button"] {
            color: #008565;
            background-color: white;
            border: 1px solid #008565;
            border-radius: 3px;
        }

        button {
            background-color: #008565;
            border: 1px solid #008565;
            border-radius: 3px;
        }

        button a {
            color: white;
        }
    </style>
    <link href="../style.css">
</head>

<body>
    <?php
    include "../nav.php";
    ?>
    <section id="sec1">
        <!-- <a href="vit.php"><button>vitamines</button></a> -->
        <form action="" method="post" class="flexr">
            <input type="text" placeholder="Enter a medicin name" name="search">
            <div class="flexr">
                <input type="submit" value="Search">
            </div>
        </form>
        <section id="sec2">
            <?php
            $con = mysqli_connect("localhost", "root", "", "hospital");
            if (mysqli_connect_errno()) {
                echo "Error  connecting to database" . mysqli_connect_error();
            }
            $sql = "select Images,Product_name,Price,Product_id from Products limit 10";
            $data = mysqli_query($con, $sql);
            $result = mysqli_fetch_all($data);
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
            foreach ($result as $row) {
                echo '<div class="med-card">';
                echo '<img src="images/' . $row[0] . '"alt="image">';
                echo '<h3 class="sepcolor">' . $row[1] . '</h3>';
                echo '<p class="normalcolor"><b>Price : </b>' . $row[2] . ' Rs</p>';
                echo '<div class="button"> <button type="button" onclick = " add(' . $row[3] . ') " >Add to cart </button>';
                echo '<button><a href="">Buy now</a> </button></div>';
                echo '</div>';
            }



            ?>
        </section>


    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function add(Product) {
            $.ajax({
                type: "POST",
                url: "r.php",
                data: { email: "<?php echo $_SESSION["email"] ?>", product_id: Product },
                success: function (response) {
                    console.log("success");
                }, error: function () {
                    alert('error');
                }

            })
            alert("Item is added to cart");
        }
    </script>
</body>

</html>