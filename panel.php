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



           <h4><strong> Profil bilgileri</strong></h4>
            <tr><td>Kullancı ID</td><td><input type="text" name="ID" value="<?php echo  $_SESSION['ID']; ?>" ></td> <td><div class="container">


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
            <tr><td>Kullanıcı adı</td><td> <input type="text" name="kulad" value="<?php echo  $_SESSION['kulad']; ?>" ></td>     </tr>
            <tr><td>Sifre</td><td><input type="text" name="sifre"  value="<?php echo  $_SESSION['sifre']; ?>" ></td><td><div class="container">


                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="basvuru.php">Başvuru yap</a></li>
                                <li><a href="ilan.php">İlan ver/ara</a></li>
                               <li><a href="fmesajlar.php">Mesajlar</a></li>



                            </ul>
                        </div>
                    </div></td>
            </tr>
            <tr><td>Email</td><td><input type="email" name="email"  value="<?php echo  $_SESSION['email']; ?>" ></td>
            </tr>
            <tr><td>İsim</td><td><input type="text" name="isim"  value="<?php echo  $_SESSION['isim']; ?>" >      </td></tr>
            <tr><td>Soyisim</td><td><input type="text" name="soyisim"  value="<?php echo  $_SESSION['soyisim']; ?>" >      </td></tr>
            <tr><td>Yaş</td><td><input type="text" name="yas"  value="<?php echo  $_SESSION['yas']; ?>" >      </td></tr>
           <tr><td>Son pozisyon</td><td><input type="text" name="sonp" value="<?php echo $_SESSION['sonp']; ?>"> </td></tr>




    </fieldset>
</form>

</body>
</html>




