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



            <h4><strong>Firma Profil bilgileri</strong></h4>
           <div class="container"> </div>


                    </div>

                </td>



            </tr>
            <tr><td>Kullanıcı adı</td><td> <input type="text" name="kulad" value="<?php echo  $_SESSION['fulad']; ?>" ></td>  <td>    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hesap ayarları
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="firmapanel.php">Profil</a></li>
                            <li><a href="fgüncel.php">Güncelle</a></li>
                            <li><a href="fhesapsil.php">Hesap sil</a></li>
                            <li><a href="fcikis.php">Çıkış yap</a></li>


                        </ul>
                    </div>




                </td>   </tr>
            <tr><td>Sifre</td><td><input type="text" name="sifre"  value="<?php echo  $_SESSION['fsifre']; ?>" ></td><td><div class="container">


                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Durum bilgisi
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">

                                <li><a href="filan.php">İlan ver/ara</a></li>
                                <li><a href="mesajlar.php">Mesajlar</a></li>



                            </ul>
                        </div>
                    </div></td>
            </tr>
            <tr><td>Firma Email</td><td><input type="email" name="email"  value="<?php echo  $_SESSION['fmail']; ?>" ></td>
            </tr>


            </tr>

        </table>
    </fieldset>
</form>

</body>
</html>




