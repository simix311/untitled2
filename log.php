<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<form action="login.php" method="post" >
<div class="container">
    <h2>Üye Giris </h2>

        <div class="form-group">
            <label for="text">Kullanıcı Adı:</label>
            <input type="text" class="form-control"  name="kulad">
        </div>
        <div class="form-group">
            <label for="pwd">Sifre:</label>
            <input type="password" class="form-control"  name="sifre">
        </div>

        <button type="submit" class="btn btn-default" name="gir">Submit</button>

</div>
</form>
</body>
</html>



