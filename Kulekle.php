<?php
include("ayar.php");

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
    </head>
    <body>
    <form action="" method="post">
        <div class="container">
            <h2>Standart Üyelik Kaydı</h2>

            <div class="form-group">
                <label for="email">İsim:</label>
                <input type="text" class="form-control" id="email"   name="isim">
            </div>
            <div class="form-group">
                <label for="pwd">Soyisim:</label>
                <input type="text" class="form-control" id="pwd"  name="soyisim">
            </div>
            <div class="form-group">
                <label for="pwd">Yaş:</label>
                <input type="text" class="form-control" id="pwd" name="yas">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="pwd"   name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="pwd"  name="kulad">
            </div>
            <div class="form-group">
                <label for="pwd">Sifre:</label>
                <input type="password" class="form-control" id="pwd"  name="sifre">
            </div>
            <div class="form-group">
                <label for="pwd">İş tecrübesi:</label>
                <input type="radio"   id="pwd"  name="ayni" value="var"> var
                <input type="radio"   id="pwd"  name="ayni" value="yok"> yok

            </div>
            <div class="form-group">
                <label for="pwd">Son Pozisyonu:</label>
                <input type="text" class="form-control" id="pwd"   name="sonp">
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="oke"> Eposta bildirimleri</label>

                <label><input type="checkbox" name="okey">Sms bildirimleri</label>
            </div>
            <button type="submit" class="btn btn-default" name="uyelik">Üyeligi tamamla</button>

        </div>
    </form>
    </body>
    </html>





<?php

include ("ayar.php");
if($_POST)
{
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $yas=$_POST["yas"];
    $email=$_POST["email"];
    $kulad=$_POST["kulad"];
    $sifre=$_POST["sifre"];
    $ayni=$_POST["ayni"];//
    $sonp=$_POST["sonp"];
    $oke=$_POST["oke"];//
    $okey=$_POST["okey"];//




    if($_POST["isim"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["soyisim"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["yas"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["email"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["kulad"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["sifre"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["ayni"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["sonp"]=="")
    {
        echo "Bu alan boş olamaz.";
    }


    else
    {

        $ekle ="INSERT INTO uyelik(isim,soyisim,yas,email,kulad,sifre,ayni,sonp,oke,okey) values ('$isim','$soyisim','$yas','$email','$kulad','$sifre','$ayni','$sonp','$oke','$okey')";



        if(mysqli_query($conn,$ekle))
        {

            echo "<br> <br> Kaydınız oluşturuldu.Ana sayfa`ya dönülüyor. ";
            header('REFRESH:2; URL="anasayfa.php" ');

        }
        else
        {
            echo "Error:".$ekle."<br>".mysqli_error($conn);
        }



    }

}


?>