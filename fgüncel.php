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



            <h4><strong>Firma Profil bilgilerini güncelle</strong></h4>
            <div class="container"> </div>


            </div>

            </td>



            </tr>
            <tr><td>Kullanıcı adı</td><td> <input type="text" name="fulad" value="<?php echo  $_SESSION['fulad']; ?>" ></td>  <td>    <div class="dropdown">
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
            <tr><td>Sifre</td><td><input type="text" name="fsifre"  value="<?php echo  $_SESSION['fsifre']; ?>" ></td><td><div class="container">


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
            <tr><td>Firma Email</td><td><input type="email" name="fmail"  value="<?php echo  $_SESSION['fmail']; ?>" ></td>
            </tr>
            <tr> <td><br><button type="submit" name="zxc" class="btn btn-success">Kaydet</button></td></tr></tr>


            </tr>

        </table>
    </fieldset>
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
