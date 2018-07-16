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
    <link rel="stylesheet" href="main.css" type="text/css" >
</head>
<body>
<form action="" method="post">
    <fieldset >
        <legend>ÜYELİK FORMU</legend>
        <table cellpadding="3" cellspacing="3">


            <tr>
                <td>isim</td>
                <td><input type="text" name="isim" </td>
            </tr>
            <tr>
                <td>soyisim</td> <td><input type="text" name="soyisim" ></td>
            </tr>
            <tr>
                <td>yaş</td>
                <td>
                    <input type="text" name="yas">
                </td>
            </tr>
            <tr>
                <td>email</td> <td><input type="email" name="email"></td>
            </tr>
            <tr><td>kullanıcı adı</td> <td>
                    <input type="text" name="kulad" >
                </td></tr>
            <tr>
                <td>sifre</td> <td><input type="password" name="sifre"></td>
            </tr>
            <tr>
                <td>iş tecrübesi</td><td> <input type="radio" name="ayni"  value="var"  > var
                    <input  type="radio" name="ayni" value="yok" > yok  </td>
            </tr>
            <tr>
                <td>son pozisyonun</td> <td><input type="text" name="sonp"> </td>
            </tr>
            <tr>
                <td>e-posta bildirimleri <input type="checkbox" name="oke"></td>
                <td>sms bildirimleri <input type="checkbox" name="okey"></td>

            </tr>
            <tr><td>iş veren üyeligi</td> <td><input type="radio" name="same" value="iş veren üyelik"> </td>
            </tr>
            <tr>

                <td>  normal üyelik</td> <td>
                    <input type="radio" name="same" value="normal üyelik">
                </td>
            </tr>

            <tr><td></td>
                <td>
                    <div class="container">
                        <button type="submit" class="btn btn-warning" value="üyeliği tamamla" name="üyelik">Üyeliği tamamla</button>
                    </div>



                </td>
            </tr>

        </table>
    </fieldset>
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
    $ayni=$_POST["ayni"];
    $sonp=$_POST["sonp"];
    $oke=$_POST["oke"];
    $okey=$_POST["okey"];
    $same=$_POST["same"];
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
    else if($_POST["same"]=="")
    {
        echo "Bu alan boş olamaz.";
    }

    else
    {

        $ekle ="INSERT INTO uyelik(isim,soyisim,yas,email,kulad,sifre,ayni,sonp,oke,okey,same) values ('$isim','$soyisim','$yas','$email','$kulad','$sifre','$ayni','$sonp','$oke','$okey','$same')";
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