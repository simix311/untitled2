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


<form action=" " method="POST">
    <div class="container">
        <h3>Profil Bilgileri</h3>
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


        </tr><br>

        <div class="form-group">
            <label for="text">Kullanıcı Adı:</label>
            <input type="text" class="form-control" id="email"    name="kulad""  value="<?php echo  $_SESSION['kulad']; ?>" >
        </div>
        <div class="form-group">
            <label for="pwd">Şifre:</label>
            <input type="text" class="form-control" id="pwd"   name="sifre" value="<?php echo  $_SESSION['sifre']; ?>   " >
        </div><div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" id="pwd"   name="email" value=" <?php echo  $_SESSION['email']; ?>  " >
        </div><div class="form-group">
            <label for="pwd">İsim:</label>
            <input type="text" class="form-control" id="pwd"   name="isim"  value=" <?php echo  $_SESSION['isim']; ?>  ">
        </div>
        <div class="form-group">
            <label for="pwd">Soyisim:</label>
            <input type="text" class="form-control" id="pwd"   name="soyisim"  value=" <?php echo  $_SESSION['soyisim']; ?>  ">
        </div>
        <div class="form-group">
            <label for="pwd">Yaş:</label>
            <input type="text" class="form-control" id="pwd"   name="yas"  value="  <?php echo  $_SESSION['yas']; ?>  " >
            <div class="form-group">
                <label for="pwd">Son Pozisyon:</label>
                <input type="text" class="form-control" id="pwd"   name="sonp" value="  <?php echo  $_SESSION['sonp']; ?> " >
            </div>


        </div>
        <button type="submit" name="zxc" class="btn btn-default">Kaydet</button>

    </div>



</form>
</body>
</html>



<?php

if($_POST)
{
    $kulad=$_POST["kulad"];
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $yas=$_POST["yas"];
    $email=$_POST["email"];
    $sifre=$_POST["sifre"];
    $sonp=$_POST["sonp"];
    //$same=$_POST["same"];

    if($kulad=="" || $sifre==""||$soyisim==""|| $isim=="" ||$yas=="" || $email=="" ||$sonp=="" )
    {
        echo "Lütfen boş girmeyiniz.";
    }
    if($conn->query("UPDATE uyelik SET kulad='".$_POST["kulad"]."', sifre='".$_POST["sifre"]."', email='".$_POST["email"]."',isim='".$_POST["isim"]."',soyisim='".$_POST["soyisim"]."' , yas='".$_POST["yas"]." ',sonp='".$sonp."'   WHERE kulad='".$_POST["kulad"]."'"))

         {
            echo " Üyelik bilgileriniz başarıyla güncellenmiştir.Tekrar girş yapın.";
            header('REFRESH:2; URL="cikis.php" ');

         }
             else{echo "hata!!";

            }







}



?>



