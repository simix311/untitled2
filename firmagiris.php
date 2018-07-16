<?php
include ("ayar.php");
ob_start();
session_start();


$fmail=$_POST["fmail"];
$fsifre=$_POST["fsifre"];
$kontrolsql="SELECT * FROM firma WHERE   fmail = '".$fmail."' AND fsifre='".$fsifre."' " ;
$aa=$conn->query($kontrolsql);
if($aa->num_rows>0)
{
    while ($row=$aa->fetch_assoc())
    {
        $_SESSION["login"]="true";
        $_SESSION["fulad"]=$row["fulad"];
        $_SESSION["fsifre"]=$row["fsifre"];
        $_SESSION["fmail"]=$row["fmail"];



        header("location:firmapanel.php");
    }


}
else{
    echo "asd";
}

    if($fmail=="" || $fsifre=="")
{
    echo "<font   color='red'>Kullanıcı adını yada sifreyi boş girmeyiniz. </font>";

}
else
{
    echo "<font   color='red'>Kullanıcı adı/sifre hatalı. </font>";
}



ob_end_flush();



?>

