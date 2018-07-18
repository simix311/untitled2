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
            <li><a href="firmapanel.php">Profil</a></li>
            <li><a href="fgüncel.php">Güncelle</a></li>
            <li><a href="fhesapsil.php">Hesap sil</a></li>
            <li><a href="cikis.php">Çıkış yap</a></li>


        </ul>
    </div>
</div>



<div class="container">


            <div class="dropdown">
                <br><br>     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                <span class="caret"></span></button>
                <ul class="dropdown-menu">

                    <li><a href="filan.php">İlan ver/ara</a></li>
                   <li><a href="mesajlar.php">Mesajlar</a></li>



                </ul>
            </div>
        </div>



<div class="container">
    <h2><STRONG> MESAJLAR </STRONG></h2> <BR>

</div>

</body>

</html>
<?php

$fmail="";


$alınan="SELECT * FROM basvuru WHERE gonderilen='".$_SESSION["fmail"]."' " ;
echo "<table class='table table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Email</th>";
echo "<th>İsim</th>";
echo "<th>Soyisim</th>";
echo "<th>Açıklama</th>";
echo "</tr>";

$aa=$conn->query($alınan);
if($aa->num_rows>0)
{
    while($aaa=$aa->fetch_assoc())
    {
        $fmail=$aaa["email"];

        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$aaa["email"]."</td>";
        echo "<td>".$aaa["isim"]."</td>";
        echo "<td>".$aaa["soyisim"]."</td>";
        echo "<td>".$aaa["mesaj"]."</td>";
        echo "</tr>";

    }
}

else{
    echo "else";
}



?>



