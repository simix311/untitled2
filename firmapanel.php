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
        <h3>Profil Bilgileri </h3>
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
            <input type="text" class="form-control" id="email"    name="fulad""  value="<?php echo  $_SESSION['fulad']; ?>" >
        </div>
        <div class="form-group">
            <label for="pwd">Şifre:</label>
            <input type="text" class="form-control" id="pwd"   name="fifre" value="<?php echo  $_SESSION['fsifre']; ?>   " >
        </div><div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" id="pwd"   name="fmail" value=" <?php echo  $_SESSION['fmail']; ?>  " >
        </div>




    </div>



</form>
</body>
</html>




