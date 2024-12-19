<?php

$name= "id19105427_aespaa";
$uname= "id19105427_root";
$password = "~RK0%J{)lQ77>5(~";
$db_name = "sign_in";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed";
}
