<?php
include("dbconnect.php");
$username = trim($_POST['username']); 
$profil_mail = $_POST['profil_mail']; 
$profil_name = $_POST['profil_name']; 
$profil_lastname = $_POST['profil_lastname']; 
$profil_mail_old = $_POST['profil_mail_old']; 

$checkmail = $conn->query("SELECT * FROM users WHERE email = '".$profil_mail."'");
if(mysqli_num_rows($checkmail) > 0 && $profil_mail_old != $profil_mail){
    echo "Bu mail zaten kayıtlıdır.";
    exit();
}
$sql ="UPDATE users
        SET  name='".$profil_name."',  lastname='".$profil_lastname."', email='".$profil_mail."'
        WHERE username = '".$username."'";

if ($conn->query($sql) === TRUE) {
    echo "OK";
}else{
    echo "Hata";
}


?>