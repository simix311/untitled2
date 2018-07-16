<?php

ob_start();
session_start();
session_destroy();//kullanıcı hesabından cıkarken
if(!isset($_SESSION["login"]))
{
    header("location:login.php");

}
else
{

     header("location:anasayfa.php");

}
ob_end_flush();


?>