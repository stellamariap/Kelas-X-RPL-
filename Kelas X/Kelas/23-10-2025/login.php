<h1>Login</h1>

<form action="" method="POST">
    <input type="email" name="email" placeholder="email" required> <br>
    <input type="password" name="password" placeholder="password" required> <br>
    <input type="submit" name="login" value="login">
</form>

<?php
    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "aku@gmail.com" && $password == "12345"){ 
            $_SESSION['email'] = $email; 
            header("location: index.php"); 
        }else{
            echo "Email atau Password salah";
        }
    }
?>