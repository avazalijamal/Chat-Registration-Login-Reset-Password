<?php require_once "./hesabvar.php"; ?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/profil.png">
    <link rel="stylesheet" href="./css/qeydiyyat.css">
    <script src="./js/qeydiyyat.js"></script>
    <title>Qeydiyyat</title>
</head>
<body>
    
<h1>

    <?php
        if(isset($_GET["msj"])){

            echo $_GET["msj"];

        }else{
            echo "Qeydiyyat Səhifəsi";
        }
    ?>
</h1>

<hr>
<form action="_qeydiyyat.php" method="post" enctype="multipart/form-data">
    <label>
        <img id="img" src="./img/profil.png">
        <input id="file" class="file" type="file" name="foto">
    </label>
<br><br>
    <label>
        Tam adiniz:
        <br>
    <input class="text" type="text" required placeholder="Rəsul Quliyev" name="tamad">
    </label>
<br><br>
    <label>
        Email addresiniz:
        <br>
        <input class="email" type="email" required placeholder="elshen@gmail.com" name="email">
    </label>
<br><br>
    <label>
        Şifrənizi:
        <br>
        <input id="pass" class="pass" type="password" required placeholder="salam12345" name="kod">
        <input id="chec" class="chec" type="checkbox" id="">
    </label>
<br><br>
<input class="button" type="submit" name="" value="Qeydiyyat">
<br>
<br>
<a href="./index.php">
<input class="button" type="button" name="" value="Daxil Ol">
</a>

</form>

</body>
</html>