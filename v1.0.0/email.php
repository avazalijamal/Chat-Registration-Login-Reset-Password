<?php require_once "./hesabvar.php"; ?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/profil.png">
    <link rel="stylesheet" href="./css/email.css">
    <title>Email Təsdiq</title>
</head>
<body>
    
<h1>Email Təsdiq Səhifəsi</h1>
<hr>
<form action="_email.php" method="post">
    <label>
        <img src="./img/profil.png">
    </label>
<br><br>
    <label>
        Təstiq kodu:
        <br>
    <input class="text" require type="number" placeholder="1234" name="kod">
    </label>
<br><br>
<input class="button" type="submit" value="Təsdiqlə">

</form>

</body>
</html>