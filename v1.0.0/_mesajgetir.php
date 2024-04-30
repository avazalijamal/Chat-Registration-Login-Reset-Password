<?php

session_start();
require_once "./baza.php";

if(!isset($_SESSION["id"])){
    
    header("location:index.php");

}else{

    $userId=$_SESSION["id"];


    if(isset($_GET['id'])){

        $dostId=$_GET['id'];

        $sql="SELECT tam_ad,email,img FROM `istifadeci` WHERE id=$dostId AND stat=1";

        $sorqu=mysqli_query($qosul,$sql);

        $cavab=mysqli_fetch_assoc($sorqu);

        if(count($cavab)>0){

            $dostInfo=$cavab;

        }

        //mesajlari oxuduqum hisse

        $sql="UPDATE `mesaj` SET stat = 0 WHERE gonderenId=$dostId AND alanId=$userId AND stat=1";

        $sorqu=mysqli_query($qosul,$sql);

        //mesajlari getiren hisse

        $sql="SELECT * FROM `mesaj` WHERE (gonderenId=$userId AND alanId=$dostId) OR (gonderenId=$dostId AND alanId=$userId)";

            $sorqu=mysqli_query($qosul,$sql);

            $mesajlar=[];

            while($cavab=mysqli_fetch_assoc($sorqu)){
              array_push($mesajlar,$cavab);
            }

    }
}

?>