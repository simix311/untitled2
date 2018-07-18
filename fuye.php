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
        <h2>Firma Üyelik Formu</h2>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email"   name="fmail">
            </div>
            <div class="form-group">
                <label for="pwd">Kullanıcı Adı:</label>
                <input type="text" class="form-control" id="pwd"   name="fulad">
            </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd"   name="fsifre">
        </div>

            <div class="checkbox">
                <label><input type="checkbox" name="bir"> E-posta bildirimleri</label>
                <label><input type="checkbox" name="iki"> Sms bildirimleri</label>
            </div>
            <button type="submit" class="btn btn-default" name="firma" value="firma ">Submit</button>
        </form>
    </div>
   </form>
    </body>
    </html>







<?php


if($_POST) {

    $fmail = $_POST["fmail"];
    $fulad = $_POST["fulad"];
    $fsifre = $_POST["fsifre"];
    $bir = $_POST["bir"];
    $iki = $_POST["iki"];




     if($_POST["fmail"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["fulad"]=="")
    {
        echo "Bu alan boş olamaz.";
    }
    else if($_POST["fsifre"]=="")
    {
        echo "Bu alan boş olamaz.";
    }

    else
    {

        $ekle ="INSERT INTO firma(fmail,fulad,fsifre,bir,iki) values ('$fmail','$fulad','$fsifre','$bir','$iki')";
        echo "<br> <br> Kaydınız oluşturuldu.Ana sayfa`ya dönülüyor. ";
        header('REFRESH:2; URL="anasayfa.php" ');


        if(mysqli_query($conn,$ekle))
        {



        }
        else
        {
            echo "Error:".$ekle."<br>".mysqli_error($conn);
        }



    }

}


?>