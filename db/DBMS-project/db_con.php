<?php

$sname= "localhost";

$uname= "root";

$password = "admin";

$db_name = "admin_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}