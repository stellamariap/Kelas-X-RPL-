<?php

     $nama = array("vincentius", "chrisna", "alam", "putra", 525, 7.5);

    // var_dump($nama);
    // echo "<br>";

    // foreach ($nama as $key) {
    //     echo $key, "<br>";
    // }

    $nama = array(
        "vincentius" => "surabaya",
        "chrisna" => "malang",
        "alam" => "sidoarjo"

    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $a => $b) {
        echo $a.'-'.$b; 
        echo '<br>';
    }

?>