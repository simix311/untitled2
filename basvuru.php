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


<form  action=" "  method="POST">
    <fieldset>

        <legend><strong>KULLANICI PANELİ</strong></legend>
        <table cellspacing="3" cellpadding="3"  >



            <h4><strong> Başvuru gönder</strong></h4>

            <tr><td>Firma email adresi</td><td><input type="email" name="gonderilen"    ></td>
            <td>
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
                </div>



            </td>
            </tr>
            <tr><td>İsim</td><td><input type="text" name="isim" value="<?php echo  $_SESSION['isim']; ?>"></td>
            </tr>
            <tr><td>Soyisim</td><td><input type="text" name="soyisim" value="<?php echo  $_SESSION['soyisim']; ?>" > </td>  <td><div class="container">


                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="basvuru.php">Başvuru yap</a></li>
                                <li><a href="ilan.php">İlan ver</a></li>
                                <li><a href="mesajlar.php">Mesajlar</a></li>



                            </ul>
                        </div>
                    </div></td>
            </tr>
            <tr><td>Email</td><td><input type="email" name="email" value="<?php echo  $_SESSION['email']; ?>" </td></tr>
            <tr><td>Mesaj</td><td><textarea  rows="4" cols="50" name="mesaj"></textarea></td></tr>
            <tr><td></td><td>   <button type="submit" class="btn btn-primary" name="basvuru" value="Gönder">Gönder</button></td></tr>




            <table>
    </fieldset>
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

