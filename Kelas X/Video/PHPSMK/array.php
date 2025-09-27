<?php

    // array dimensi 

    // $nama = array("vincentius","chrisna","alam","putra", 100, 2.5)

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) {
    //     echo $i;
    //     echo $nama[$i]."<br>";
    // }

    foreach ($nama as $k) {
        echo $k.'<br>'; 
    }

    // array asosiatif 

    // $nama = array(
    //     "vincentius" => "surabaya",
    //     "chrisna" => "malang raya",
    //     "alam" => "jakarta",
    //     "putra" => "sidoarjo"
    // );

    $nama["vincentius"]="surabaya";
    $nama["chrisna"]="malang raya";
    $nama["alam"]="jakarta";
    $nama["putra"]="sidoarjo";
    $nama["valencia"]="semarang";



    var_dump($nama);

    echo "<br>";

    // echo $nama['chrisna'];

    foreach ($nama as $k => $v) {
        echo $k." => ".$v; 

        echo "<br>";
    }
    
    

?>