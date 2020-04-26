<?php
include("dbconnect.php");
$username = $_POST['username']; 
$password = md5($_POST['password']); 
$userCheck = $conn->query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
if(mysqli_num_rows($userCheck) > 0){
    session_start();
    $_SESSION["oturum"] = TRUE;
    $_SESSION["username"] = $username;
    echo "OK";
}else{
    echo "Kullanıcı adı veya şifre hatalı";
}
?>