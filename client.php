<?php
if (isset($_POST["submit"])) {
    if ($_POST["message"] != "" && $_POST["submit"]) {
        $host = "127.0.0.1";
        $port = 8080;
        $socket = socket_create(AF_INET, SOCK_STREAM, 0);

        socket_connect($socket, $host, $port);
        while(true){

        $message = $_POST["message"];

        socket_write($socket, $message, strlen($message));

        $message = socket_read($socket, 1024);

        echo $message . "\n";
        }


    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello</h1>
    <form method="POST" action="client.php">
        <input type="text" name="message">
        <input type="submit" name="submit">
    </form>



    <?php
    /*$host = "127.0.0.1";
    $port = 808112;
    $socket = socket_create(AF_INET, SOCK_STREAM, 0);

    socket_connect($socket, $host, $port);

    $message = "hello Nayan";

    socket_write($socket, $message, strlen($message));*/
    ?>

</body>

</html>