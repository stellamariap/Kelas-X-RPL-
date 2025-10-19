belajar php 
<h1>saya belajar php</h1>
<?php
$nama = "Stella Maria Poernomo";
$kelas = "12";
$umur = "15";
$alamat = "Perum Puri Prima Sari";
$hobi = "mendengarkan musik";
$cita_cita = "kaya";
$enter = "<br/>";

echo $nama;
echo $enter; 

echo $kelas;
echo $enter;

echo $umur;
echo $enter;

echo $alamat;
echo $enter;

echo $hobi; 
echo $enter; 

echo $cita_cita;


// echo "<h1>saya belajar php</h1>"; 
// echo "saya kelas: ";
// echo 12;

// echo "<h1>Halo!</h1>";
// echo "Perkenalkan nama saya Stella Maria Poernomo";
// echo "<br/>";
// echo "Saya kelas 10 dan saya bersekolah di SMKN 2 Buduran";
// echo "<br/>";
// echo "Saya berusia 15 tahun";
// echo "<br/>";
// echo "Alamat saya berada di Perum Puri Prima Sari A4/1A RT 001 RW 003, Desa Ketegan";
// echo "<br/>";
// echo "Hobi saya bermain sepeda, mendengarkan musik";
// echo "<br/>";
// echo "Cita-cita saya adalah kaya raya 7 turunan";
// echo "<br/>";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stella</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        Nama:
                    </td>
                    <td>
                        <?=$nama;?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td>
                        <?=$alamat;?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas:</td>
                    <td>
                        <?=$kelas;?>
                    </td>
                </tr>
                <tr>
                    <td>Umur:</td>
                    <td>
                        <?=$umur;?>
                    </td>
                </tr>
                <tr>
                    <td>Hobi:</td>
                    <td>
                        <?=$hobi;?>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita:</td>
                    <td>
                        <?=$cita_cita;?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
