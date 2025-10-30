<form action="" method="POST">
    Tanggal : 
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal">
    Bulan :
    <input type="number" name="bulan" placeholder="Masukkan Bulan">
    <input type="submit" name="kirim" value="Zodiak Anda">
</form>

<form action="" method="POST">
    a: 
    <input type="number" name="a" placeholder="Bilangan a"> <br>
    b: 
    <input type="number" name="b" placeholder="Bilangan b"> <br>
    <input type="submit" name="hitung" value="jumlahkan">
    <input type="submit" name="hitung" value="kurangi">
    <input type="submit" name="hitung" value="kalikan">
    <input type="submit" name="hitung" value="bagikan">
</form>

<?php
    
    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'jumlahkan') {
            echo "Penjumlahan dari $a + $b adalah: <br>";
            echo $a + $b; 
        }
        if ($hitung == 'kurangi') {
            echo "Pengurangan dari $a - $b adalah: <br>";
            echo $a - $b; 
        }
        if ($hitung == 'kalikan') {
            echo "Perkalian dari $a * $b adalah: <br>";
            echo $a * $b; 
        }
        if ($hitung == 'bagikan') {
            echo "Pembagian dari $a / $b adalah: <br>";
            echo $a / $b; 
        }
    }

    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
    }
    function belajar() {
        echo "Hari ini saya belajar function";
    }
   

    function cekTanggal($tanggal) {
         

        if ($tanggal > 0 && $tanggal < 32) {
            // echo "tanggal benar";
            return true;
        } else {
            // 
            return false; 
        }
    }

    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(100);

    // $tanggal = 25;
    // $bulan = 1;
   

    function zodiak($bulan, $tanggal) {
         if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan <13) {
        if ($bulan == 1) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Capricorn";
            } else {
                echo "Zodiak anda: Aquarius";
            }
        }

        if ($bulan == 2) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Aquarius";
            } else {
                echo "Zodiak anda: Pisces"; 
            }
        }

        if ($bulan == 3) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Pisces";
            } else {
                echo "Zodiak anda: Aries"; 
            }
        }
        if ($bulan == 4) {
            if ($tanggal > 0 && $tanggal < 20) {
                 echo "Zodiak anda: Aries";
            } else {
                echo "Zodiak anda: Taurus"; 
            }
        } 
        if ($bulan == 5) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Taurus";
            } else {
                echo "Zodiak anda: Gemini";
            }
        }
        if ($bulan == 6) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Gemini";
            } else {
                echo "Zodiak anda: Cancer";
            }
        }
        if ($bulan == 7) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Cancer";
            } else {
                echo "Zodiak anda: Leo";
            }
        }
        if ($bulan == 8) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Leo";
            } else {
                echo "Zodiak anda: Virgo";
            }
        }
        if ($bulan == 9) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Virgo"; 
            } else {
                echo "Zodiak anda: Libra"; 
            }
        }
        if ($bulan == 10) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Libra";
            } else {
                echo "Zodiak anda: Scorpio";
            }
        }
        if ($bulan == 11) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Scorpio";
            } else {
                echo "Zodiak anda: Sagitarius";
            }
        }
        if ($bulan == 12) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda: Sagitarius";
            } else {
                echo "Zodiak anda: Capricorn";
            }
        }
    } else {
        echo "Tanggal atau bulan salah";
    }
    }

    // zodiak(1, 100);
    // zodiak(12, 30);
    // zodiak(5, 20);

    function cekBulan($bulan) {
        if ($bulan > 0 && $bulan < 13) {
            return true;
        } else {
            return false;
        }
    } 

    // cekBulan(0); 

    // if (cekBulan(1) && cekTanggal(0)) {
    //     echo "Bulan atau tanggal benar"; 
    // } else {
    //     echo "Bulan atau tanggal salah"; 
    // }

    function luasPersegiPanjang($p, $i) {
        $luas = $p * $i; 
        return $luas; 
    }

    $p = 55;
    $i = 33;
    $t = 155; 

    echo "Volume balok dengan panjang $p lebar $i dan tinggi $t adalah <br>";

    echo luasPersegiPanjang($p, $i) * $t; 

    function tambah($a, $b) {
        return $a + $b; 
    } 
    function kurang($a, $b) {
        return $a - $b; 
    }
    function kali($a, $b) {
        return $a * $b; 
    }
    function bagi($a, $b) {
        return $a / $b; 
    }

    $a = 15;
    $b = 5; 

?>