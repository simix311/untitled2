<?php
session_start();
include ("ayar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css" type="text/css" >
</head>
<body>


<form action=" " method="post">
    <div class="container">
        <h3>Başvuru gönder</h3>
        <tr> <td>
                <div class="container">


                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hesap ayarları
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="panel.php">Profil</a></li>
                            <li><a href="guncelle.php">Güncelle</a></li>
                            <li><a href="hesapsil.php">Hesap sil</a></li>
                            <li><a href="cikis.php">Çıkış yap</a></li>
                        </ul>
                    </div>
                </div></td>
            <td>        <div class="container">


                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="basvuru.php">Başvuru yap</a></li>
                            <li><a href="ilan.php">İlan ver/ara</a></li>
                            <li><a href="fmesajlar.php">Mesajlar</a></li>



                        </ul>
                    </div>
                </div>
            </td>


        </tr>
        <br>
        <br>

        <div class="form-group">
            <label for="email">Firma Email Adresi:</label>
            <input type="email" class="form-control" id="email"    name="gonderilen"   >
        </div>
        <div class="form-group">
            <label for="pwd">İsim:</label>
            <input type="text" class="form-control" id="pwd"   name="isim" value="<?php echo  $_SESSION['isim']; ?>   " >
        </div><div class="form-group">
            <label for="pwd">Soyisim:</label>
            <input type="text" class="form-control" id="pwd"   name="soyisim" value=" <?php echo  $_SESSION['soyisim']; ?>  " >
        </div><div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" id="pwd"   name="email"  value=" <?php echo  $_SESSION['email']; ?>  ">
        </div>
        <label for="pwd">Mesaj:</label>
        <div class="form-group">

            <textarea  rows="4" cols="50" name="mesaj"></textarea>

        </div>
        <button type="submit" name="basvuru" class="btn btn-default" value="gonder">Gönder</button>
    </div>



</form>
</body>
</html>


<?php

if($_POST)
{
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $email=$_POST["email"];
    $mesaj=$_POST["mesaj"];
    $gonderilen=$_POST["gonderilen"];
    if($isim=="" || $email==""||  $soyisim==""|| $gonderilen=="" || $mesaj=="" )
    {
        echo " <br><font   color='red'> Lütfen boş girmeyiniz. </font>";
    }
    else
    {
        $gonder="INSERT INTO basvuru(isim,soyisim,email,mesaj,gonderilen) values ('$isim','$soyisim','$email','$mesaj','$gonderilen')";




            if(mysqli_query($conn,$gonder))
            {


                echo " <br><font   color='#191970'> Başvurunuz gönderildi. </font>";
                header('REFRESH:2; URL="basvuru.php" ');

            }

            else
            {
                echo "Error:".$gonder."<br>".mysqli_error($conn);
            }
    }
}


?>

