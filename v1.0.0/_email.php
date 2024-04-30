<?php
    session_start();
    require_once "./baza.php";

    if($_POST){

        $kod=$_POST['kod'];
        $email=$_SESSION["email"];

        $sql="SELECT COUNT(*) AS say FROM `kod` WHERE email='$email' AND kod='$kod' AND stat=1";

        $sorqu=mysqli_query($qosul,$sql);

        $cavab=mysqli_fetch_assoc($sorqu);

        if($cavab['say']>0){

            $sql="UPDATE `istifadeci` SET stat = 1 WHERE email = '$email'";
            $sorqu=mysqli_query($qosul,$sql);

            $sql="UPDATE `kod` SET stat = 0 WHERE email = '$email'";
            $sorqu=mysqli_query($qosul,$sql);

            if($sorqu){

                header("location:index.php");

            }


        }else{
            echo "<h1 align='center'>gonderdiyiniz kod yanlisdir</h1>";
        }

        

    }else{
        echo "<h1 align='center'>bu sehifeye daxil olmaq qadagandir</h1>";
    }


?>