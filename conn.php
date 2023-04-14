<?php

$host="localhost";
$username="root";
$pwd="";
$db="jbc";
$conn=mysqli_connect($host,$username,$pwd,$db);
if (!$conn) {
    # code...
    echo"database not connect".mysqli_connect($conn);
}