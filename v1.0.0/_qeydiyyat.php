<?php

    session_start();
    require_once "./baza.php";


    if($_POST){

      
        $tamad=$_POST["tamad"];
        $email=$_POST["email"];
        $kod=$_POST["kod"];
        $kod=md5($kod);

        $temp=$_FILES["foto"]["tmp_name"];
        $n=$_FILES["foto"]["name"];
    
        $fname="user/".uniqid()."-".$n;
        $fu=move_uploaded_file($temp,"img/".$fname);

        if(!$n) $fname="profil.png";

        $sql="INSERT INTO `istifadeci`(`tam_ad`,`email`,`parol`,`img`) VALUES('$tamad','$email','$kod','$fname')";

        $sorqu=mysqli_query($qosul,$sql);

        if($sorqu){

            $sifre=rand(1000,9999);

            $sql="INSERT INTO `kod`(`email`,`kod`) VALUES('$email','$sifre')";

            $sorqu=mysqli_query($qosul,$sql);

            if($sorqu){

                //burada emile mesaj gedecek
                // $m=mail($email,"WPCHAT HESAB TESDIQI","Hesabinizi tesdiqlemek ucun kod: {$sifre}");
                
                // if($m){
                    $_SESSION["email"]=$email;
                    header("location:email.php");
                // }else{
                //     header("location:qeydiyyat.php?msj=mail gondermede problem oldu");
                // }
                
               

            }else{
                header("location:qeydiyyat.php?msj=qeydiyyatda problem var");
            }

        }else{        
            header("location:qeydiyyat.php?msj=qeydiyyatda problem var");
        }

    }else{
        echo "<h1 align='center'>bu sehifeye daxil olmaq qadagandir</h1>";
    }


?>