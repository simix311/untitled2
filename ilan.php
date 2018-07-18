<?php
session_start();
include ("ayar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<form action="" method="post">


<div class="container">


    <div class="dropdown">
        <br>  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hesap ayarları
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="panel.php">Profil</a></li>
            <li><a href="guncelle.php">Güncelle</a></li>
            <li><a href="hesapsil.php">Hesap sil</a></li>
            <li><a href="cikis.php">Çıkış yap</a></li>


        </ul>
    </div>
</div>



<div class="container">


    <div class="dropdown">
        <br><br>     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
            <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="basvuru.php">Başvuru yap</a></li>
            <li><a href="ilan.php">İlan ver/ara</a></li>
            <li><a href="fmesajlar.php">Mesajlar</a></li>



        </ul>
    </div>
</div>



<div class="container">
    <h2><STRONG> İş ilanları </STRONG></h2> <BR>





</form>


</body>
</html>
<?php

$gonderilen=$mesaj="";
if($_POST)
{
    $gonderilen=$_POST["gonderilen"];
    $mesaj=$_POST["mesaj"];
    if($gonderilen=="" || $mesaj=="" )
    {


        echo "<font class='aaa' color='red'> Lütfen boş girmeyiniz. </font>";


    }
    else
    {
        $ekle="INSERT INTO cv (gonderilen,mesaj) values ('$gonderilen','$mesaj')";




        if(mysqli_query($conn,$ekle))
        {

            echo "<font class='aaa' color='green'>İlan verildi. </font>";
            header('REFRESH:3; URL="ilan.php" ');

        }

        else
        {
            echo "Error:".$ekle."<br>".mysqli_error($conn);


        }
    }
}

echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>Açıklama</th>";
echo "</tr>";

//verileri cekme//cv
$cek="SELECT * FROM cv  ";
$goster=$conn->query($cek);
if($goster->num_rows>0)
{
    while ($rov=$goster->fetch_assoc())
    {

            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$rov["gonderilen"]."</td>";
            echo "<td>".$rov["mesaj"]."</td>";
            echo "</tr>";
    }
}



?>

