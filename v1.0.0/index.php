<?php require_once "./hesabvar.php"; ?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/profil.png">
    <link rel="stylesheet" href="./css/daxilol.css">
    <script src="./js/daxilol.js"></script>
    <title>Daxil Ol</title>
</head>
<body>
    
<h1>
    
    <?php
        if(isset($_GET["msj"])){

            echo $_GET["msj"];

        }else{
            echo "Daxil Ol Səhifəsi";
        }
    ?>

</h1>
<hr>
<form action="_daxilol.php" method="post">
    <label>
        <img src="./img/profil.png">
    </label>
<br><br>
    <label>
        Email addresiniz:
        <br>
        <input class="email" require type="email" placeholder="elshen@gmail.com" name="email">
    </label>
<br><br>
    <label>
        Şifrənizi:
        <br>
        <input id="pass" require class="pass" type="password" placeholder="salam12345" name="kod">
        <input id="chec" class="chec" type="checkbox" id="">
    </label>
<br><br>
<input class="button" type="submit" name="" value="Daxil Ol">
<br>
<br>
<a href="./qeydiyyat.php">
<input class="button" type="button" name="" value="Qeydiyyat Ol">
</a>
</form>

</body>
</html>