<?php

    require_once "./baza.php";

    if($_POST){

        $gonderen=$_POST['gonderen'];
        $alan=$_POST['alan'];
        $mesaj=$_POST['mesaj'];

        echo $mesaj."<br>";
        echo $alan."<br>";
        echo $gonderen."<br>";

        $sql="INSERT INTO `mesaj` (`gonderenId`, `alanId`, `mesaj`) VALUES ($gonderen,$alan,'$mesaj')";       
        $sorqu=mysqli_query($qosul,$sql);

        if($sorqu){
            header("location:chat.php?id={$alan}");
        }

    }else{
        echo "<h1 align='center'>bu sehifeye daxil olmaq qadagandir</h1>";
    }


?>