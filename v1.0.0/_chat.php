<?php


        $userId=$_SESSION["id"];

        $sql="SELECT tam_ad,email,img FROM `istifadeci` WHERE id=$userId AND stat=1";

        $sorqu=mysqli_query($qosul,$sql);

        $cavab=mysqli_fetch_assoc($sorqu);

        if(count($cavab)>0){
            $userInfo=$cavab;

            $sql="SELECT id,tam_ad,email,img FROM `istifadeci` WHERE id!=$userId AND stat=1";

            $sorqu=mysqli_query($qosul,$sql);

            $dostlar=[];

            while($cavab=mysqli_fetch_assoc($sorqu)){

                $s="SELECT COUNT(*) as say FROM `mesaj` WHERE gonderenId={$cavab['id']} AND alanId={$userId} AND stat=1";
                $sor=mysqli_query($qosul,$s);
                $cav=mysqli_fetch_assoc($sor);
                
                $cavab['mesaj_sayi']=$cav['say'];
                
                $s="SELECT mesaj,tarix FROM `mesaj` WHERE gonderenId={$cavab['id']} AND alanId={$userId} AND stat=1 ORDER BY id DESC LIMIT 1";
                $sor=mysqli_query($qosul,$s);
                $cav=mysqli_fetch_assoc($sor);

                $cavab['son_mesaj']=$cav;

                array_push($dostlar,$cavab);
            }


        }else{
            session_destroy();
            header("location:index.php");
        }


    

   

?>