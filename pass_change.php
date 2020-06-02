<?php
include("dbconnect.php");
$username = trim($_POST['username']); 
$old_pass = md5($_POST['old_pass']); 
$new_pass = md5($_POST['new_pass']); 
$new_pass_re = $_POST['new_pass_re']; 

$checkUserPass = $conn->query("SELECT * from users WHERE username = '".$username."' and password='".$old_pass."'");

if(mysqli_num_rows($checkUserPass) < 1){
    echo "Eski şifre hatalı";
    exit();
}
$sql ="UPDATE users
        SET  password='".$new_pass."'
        WHERE username = '".$username."' and password='".$old_pass."'";
if ($conn->query($sql) === TRUE) {
    echo "OK";
}else{
    echo "Hata";
}

?>