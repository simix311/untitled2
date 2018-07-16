<?php
$servername="localhost";
$username="root";
$password="root";
$db="mydb";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
    die("Baglantı başarısız".$conn->connect_error);
}
