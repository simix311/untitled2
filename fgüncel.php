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
        <h3>Profil Bilgileri Güncelle</h3>
        <tr> <td>
                <div class="container">


                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hesap ayarları
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="firmapanel.php">Profil</a></li>
                            <li><a href="fgüncel.php">Güncelle</a></li>
                            <li><a href="fhesapsil.php">Hesap sil</a></li>
                            <li><a href="fcikis.php">Çıkış yap</a></li>
                        </ul>
                    </div>
                </div></td>
            <td>        <div class="container">


                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">

                            <li><a href="filan.php">İlan ver/ara</a></li>
                            <li><a href="mesajlar.php">Mesajlar</a></li>



                        </ul>
                    </div>
                </div>
            </td>


        </tr><br>

        <div class="form-group">
            <label for="text">Kullanıcı Adı:</label>
            <input type="text" class="form-control" id="email"    name="fulad" value="<?php echo  $_SESSION['fulad']; ?>" >


        </div>
        <div class="form-group">
            <label for="pwd">Şifre:</label>
            <input type="text" class="form-control" id="pwd"   name="fsifre" value="<?php echo  $_SESSION['fsifre']; ?>   " >
        </div><div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" id="pwd"   name="fmail" value=" <?php echo  $_SESSION['fmail']; ?>  " >
        </div>



        <button type="submit" name="zxc" class="btn btn-default">Kaydet</button>

    </div>



</form>
</body>
</html>





<?php

if($_POST)
{
    $fulad=$_POST["fulad"];
    $fmail=$_POST["fmail"];
    $fsifre=$_POST["fsifre"];


    if($fulad=="" || $fsifre==""  || $fmail==""  )
    {
        echo "Lütfen boş girmeyiniz.";
    }
    if($conn->query("UPDATE firma SET fulad='".$_POST["fulad"]."', fsifre='".$_POST["fsifre"]."', fmail='".$_POST["fmail"]."'   WHERE fulad='".$_POST["fulad"]."'"))

    {
        echo " Üyelik bilgileriniz başarıyla güncellenmiştir.Tekrar girş yapın.";
        header('REFRESH:2; URL="cikis.php" ');

    }
    else{echo "hata!!";

    }







}



?>
