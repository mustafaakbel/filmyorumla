<?php
include("dbconnect.php");
$username = $_POST['username']; 
$email = $_POST['email']; 
$password = md5($_POST['password']); 
$mailCheck = $conn->query("SELECT email FROM users WHERE email='".$email."'");
if(mysqli_num_rows($mailCheck) > 0){
    echo "email already exists";
}else{
    $sql = "INSERT INTO users(username, name, lastname,email, password )
            VALUES ('$username', 'Güncelle', 'Güncelle', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }

?>