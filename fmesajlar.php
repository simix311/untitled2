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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet " type="text/css" href="main.css">
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
            <li><a href="basvuru.php">Başvuru</a></li>
            <li><a href="ilan.php">İlan ver/ara</a></li>
            <li><a href="fmesajlar.php">Mesajlar</a></li>



        </ul>
    </div>
</div>



<div class="container">
    <h2><STRONG> ONAY BEKLEYEN DURUMLAR </STRONG></h2> <BR>

</div>
</form>
</body>

</html>

