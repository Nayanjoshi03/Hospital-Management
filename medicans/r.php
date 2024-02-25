<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //json_decode();
    $product = $_POST["product_id"];
    $email = $_POST["email"];
    $con = mysqli_connect("localhost", "root", "", "hospital");
    $sql = "INSERT INTO cart(Email, Product_id, Quantity) VALUES ('{$email}','{$product}','1')";
    echo mysqli_query($con, $sql);
    ?>
    <h1>hello Nayan</h1>
</body>

</html>