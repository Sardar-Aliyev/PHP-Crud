<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'telebeler');

$conn = mysqli_connect (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


if (!$conn) {
    die('no Connect:' . mysqli_connect_error());
}


?>
