<?php
include ("ayar.php");
ob_start();
session_start();


$kulad=$_POST["kulad"];
$sifre=$_POST["sifre"];
$kontrolsql="SELECT * FROM uyelik WHERE   kulad = '".$kulad."' AND sifre='".$sifre."'";
$aa=$conn->query($kontrolsql);
if($aa->num_rows>0)
{
    while ($row=$aa->fetch_assoc())
    {
        $_SESSION["login"]="true";
        $_SESSION["kulad"]=$row["kulad"];
        $_SESSION["sifre"]=$row["sifre"];
        $_SESSION["email"]=$row["email"];
        $_SESSION["ID"]=$row["ID"];
        $_SESSION["same"]=$row["same"];
        $_SESSION["yas"]=$row["yas"];
        $_SESSION["isim"]=$row["isim"];
        $_SESSION["soyisim"]=$row["soyisim"];
        $_SESSION["sonp"]=$row["sonp"];


        header("location:panel.php");
    }


}
else
{ if($kulad=="" || $sifre=="")
{
    echo "<font   color='red'>Kullanıcı adını yada sifreyi boş girmeyiniz. </font>";

}
else
{
    echo "<font   color='red'>Kullanıcı adı/sifre hatalı. </font>";
}

}

ob_end_flush();



?>

