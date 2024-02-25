<?php
$host = "127.0.0.1";
$port = 8080;
$socket = socket_create(AF_INET, SOCK_STREAM, 0);
$result = socket_bind($socket, $host, $port) or die("error occured ");
$res = socket_listen($socket, 3);
while (true) {
    $accept = socket_accept($socket);
    print_r($accept);

    $message = socket_read($accept, 1024);

    echo $message . "\n";
    echo "Enter reply";
    $reply = fgets(STDIN);
    socket_write($accept, $reply, strlen($reply));
}
?>