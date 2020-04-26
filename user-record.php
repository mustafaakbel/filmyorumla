<?php
include("dbconnect.php");
$username = $_POST['username']; 
$email = $_POST['email']; 
$password = md5($_POST['password']); 
$password2 = md5($_POST['repassword']); 
$mailCheck = $conn->query("SELECT email FROM users WHERE email='".$email."'");
if(mysqli_num_rows($mailCheck) > 0){
    echo "Bu maile ait hesap bulunmaktadır";
}else{
    $sql = "INSERT INTO users(username, name, lastname,email, password )
            VALUES ('$username', 'Güncelle', 'Güncelle', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION["oturum"] = TRUE;
        $_SESSION["username"] = $username;
        echo "OK";
    } else {
        echo "Kullanıcı eklenemedi";
    }
    }

?>