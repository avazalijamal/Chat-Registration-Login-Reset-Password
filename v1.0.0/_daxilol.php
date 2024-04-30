<?php

    session_start();
    require_once "./baza.php";

    if($_POST){

        $email=$_POST["email"];
        $kod=$_POST["kod"];
        $kod=md5($kod);

        $sql="SELECT COUNT(*) AS say, id FROM `istifadeci` WHERE email='$email' AND parol='$kod' AND stat=1";

        $sorqu=mysqli_query($qosul,$sql);

        $cavab=mysqli_fetch_assoc($sorqu);

        if($cavab['say']>0){

            $_SESSION["id"]=$cavab['id'];

            header("location:chat.php");

        }else{
            header("location:index.php?msj=Gonderilen melumatlarda xeta var");
        }


    }else{
        echo "<h1 align='center'>bu sehifeye daxil olmaq qadagandir</h1>";
    }

?>