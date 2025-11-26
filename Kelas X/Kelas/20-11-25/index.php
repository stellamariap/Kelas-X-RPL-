<form action="" method="POST">
    Email : 
    <input type="email" name="email" required placeholder="Masukkan Email">
    Password : 
    <input type="password" name="password" required placeholder="Masukkan Password">
    <input type="submit" name="login" value="login">
</form>


<?php
    session_start();  

    if (isset($_POST['login'])) {
        $email = $_POST ['email']; 
        $password = $_POST ['password']; 
        $_SESSION['email'] = $email; 
        header("Location: login.php"); 
        echo "email : " . $email . "<br>"; 
        echo "password : " . $password . "<br>"; 
    }

    $isi = "hello word"; 
    $hasil = isset($isi); 
    echo $hasil; 

    if(isset($isi)) {
        echo "variabel ada isi";
    } else {
        echo "variabel tidak ada isi";
    }

    var_dump ($isi);

?>