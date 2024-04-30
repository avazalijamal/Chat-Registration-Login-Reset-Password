<?php require_once "./_mesajgetir.php";?>
<?php require_once "./_chat.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta http-equiv="refresh" content="1;"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/email.png">
    <link rel="stylesheet" href="./css/chat.css">
    <script src="./js/chat.js"></script>
    <title>CHAT</title>
</head>
<body>
    
<a class="power" href="./cixis.php"><img src="./img/power.png" alt=""></a>
<a class="power" style="right:70px;" href=""><img style="right:70px;" src="./img/refresh.png" alt=""></a>
    <div class="left">

        <div class="profil">
            <img src="./img/<?php echo $userInfo['img'] ?>" title="<?php echo $userInfo['tam_ad'] ?>">
            <div>
                <h2>
                    <?php echo $userInfo['tam_ad'] ?>
                </h2>
                <p>
                    <?php echo $userInfo['email'] ?>
                </p>
            </div>
        </div>

        <br><hr><br>

        <div class="friends">

            <?php foreach($dostlar as $dost):  ?>

            <a href="chat.php?id=<?php echo $dost['id'] ?>">
                <div class="profil-f">
                    <img src="./img/<?php echo $dost['img'] ?>" title="<?php echo $dost['tam_ad'] ?>">
                    <div>
                        <h2>
                            <span><?php echo $dost['tam_ad'] ?></span>
                            
                            <?php 
                                if($dost['mesaj_sayi']!=0)
                                    echo "<b>{$dost['mesaj_sayi']}</b>"
                            ?>
                            
                        </h2>
                        <p>
                            <?php
                                if($dost['son_mesaj']){
                                    echo "
                                        <span>{$dost['son_mesaj']['mesaj']}</span>
                                        <b>{$dost['son_mesaj']['tarix']}</b>
                                    ";
                                }else{
                                    echo "
                                    <span>{$dost['email']}</span>
                                    ";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </a>
           <?php endforeach;  ?>

        </div>


    </div>

    
    <div class="right">
        <?php if(isset($_GET['id'])):  ?>

        <div class="profil">
            <img src="./img/<?php echo $dostInfo['img'] ?>">
            <div>
                <h2>
                    <?php echo $dostInfo['tam_ad'] ?>
                </h2>
                <p>
                    <?php echo $dostInfo['tam_ad'] ?>
                </p>
            </div>
        </div>

        <div class="message">

            <?php foreach($mesajlar as $mesaj): ?>
        
                <div class="txt <?php echo $mesaj['gonderenId']==$userId?"l":"r"; ?>">
                    <p>
                        <?php echo $mesaj['mesaj'] ?>
                    </p>
                    <h4>
                        <?php echo $mesaj['tarix'] ?>
                    </h4>
                </div>
        
            <?php endforeach; ?>
        </div>

        <form action="_mesajyaz.php" method="post">
            <input autofocus class="msj" type="text" name="mesaj" placeholder="mesajiniz yazin...">
            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="alan">
            <input type="hidden" value="<?php echo $userId ?>" name="gonderen">
            <input class="btn" type="submit" value="Gonder">
        </form>

        <?php endif; ?>
    </div>
</body>
</html>