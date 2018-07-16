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

<div class="container">
    <h2>Firma giris </h2>
    <form action="firmagiris.php" method="post" >
        <div class="form-group">
            <label for="email">Firma mail</label>
            <input type="email" class="form-control"  name="fmail">
        </div>
        <div class="form-group">
            <label for="pwd">Sifre</label>
            <input type="password" class="form-control"  name="fsifre">
        </div>

        <button type="submit" class="btn btn-default" name="gir">Submit</button>
    </form>
</div>

</body>
</html>




