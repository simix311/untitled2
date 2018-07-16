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
            <legend>FİRMA ÜYELİK FORMU</legend>
            <table cellpadding="3" cellspacing="3">



                <tr>
                    <td>email</td> <td><input type="email" name="fmail"></td>
                </tr>
                <tr><td>kullanıcı adı</td> <td>
                        <input type="text" name="fulad" >
                    </td></tr>
                <tr>
                    <td>sifre</td> <td><input type="password" name="fsifre"></td>
                </tr>


                <tr>
                    <td>e-posta bildirimleri <input type="checkbox" name="bir"></td>
                    <td>sms bildirimleri <input type="checkbox" name="iki"></td>



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