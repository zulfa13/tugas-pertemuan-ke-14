<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "lt";

$conn = mysqli_connect($host,$user,$pass,$db);

if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
}

?>