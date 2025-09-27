<?php

    $hari = 3;


    // switch ($hari) {
    //     case '1':
    //         echo "Senin";
    //         break;
    //     case '2':
    //         echo "Selasa";
    //         break;
    //     case '3':
    //         echo "Rabu";
    //         break;
    //     default:
    //         echo "Tidak ada hari";
    //         break;
    // }

    $pilihan = "tambah";

    switch ($pilihan) {
        case 'tambah':
            echo "Anda memilih tambah";
            break;
        case 'ubah':
            echo "Anda memilih ubah";
            break;
        case 'hapus':
            echo "Anda memilih hapus";
            break;
        default:
            echo "Pilihan tidak ada";
            break;
    }


?>