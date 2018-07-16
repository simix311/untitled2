<?php

ob_start();
session_start();
session_destroy();//kullanıcı hesabından cıkarken
if(!isset($_SESSION["firma"]))
{
    header("location:firma.php");

}
else
{

    header("location:anasayfa.php");

}
ob_end_flush();


?>