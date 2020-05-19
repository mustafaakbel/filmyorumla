<?php
include("dbconnect.php");
$username = $_POST['username']; 
$film_id = $_POST['film_id']; 
$status = $_POST['status']; 
if($status == "1"){
    $sql = "DELETE FROM favori_filmler WHERE film_id='".$film_id."' && username='".$username."'";
}else{
    $sql = "INSERT INTO favori_filmler(film_id,username,status)
                VALUES ('$film_id', '$username', '1')"; 
}

if ($conn->query($sql) === TRUE) {
    echo "OK";
}else{
    echo "Hata";
}

?>