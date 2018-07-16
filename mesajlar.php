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
                    <li><a href="ilan.php">İlan ver</a></li>
                    <li><a href="mesajlar.php">Mesajlar</a></li>



                </ul>
            </div>
        </div>



<div class="container">
    <h2><STRONG> MESAJLAR </STRONG></h2> <BR>

    <table class="table table-striped">
        <thead>
        <tr>
         <th>İsim</th>
            <th>Soyisim</th>
            <th>Email</th>
            <th>açıklama</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>adadasdasdadddsd</td>
            <td>Doeasdasdasdasdd</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Maraaaaaaaaaaaay</td>
            <td>Moeasdasdasdadsa</td>
            <td>mary@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Julyadadadadasda</td>
            <td>Dooleadasdasdddy</td>
            <td>july@example.com</td>
            <td>john@example.com</td>
        </tr>
        <tr>

        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
<?php
//$cek="SELECT * FROM cv  ";


$mesaj="SELECT * FROM  basvuru WHERE gonderilen= '".$_SESSION['gonderilen']."' ";
$aa=$conn->query($mesaj);
if($aa->num_rows>0)
{
        $_SESSION["gonderilen"]=$aa["gonderilen"];


    while($aaa=$aa->fetch_assoc())
    {


        $degisken="SELECT * FROM basvuru WHERE gonderilen='".$_POST["gonderilen"]."' ";
        echo "<td>".$aaa["gonderilen"]."</td>";
        echo "<td>".$aaa["mesaj"]."</td>";


    }
}

else{
    echo "baglantı_kurulamadı";
}



?>
