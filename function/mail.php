<?php
$r = mail("nayanjoshi365@gmai.com", "Demo", "demo", "FROM:nayanjoshi984@gmail.com");
if ($r) {
    echo "done";
} else {
    echo "error";
}


?>