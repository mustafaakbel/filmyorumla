<?php
include("dbconnect.php");
session_start();
$baslik_yorum = $_POST['baslik_yorum']; 
$yorum_puan = $_POST['yorum_puan']; 
$yorum = $_POST['yorum']; 
$user_name = $_SESSION["username"];
$film_id = $_POST['film_id'];
$tarih = date("d.m.Y");
$sql = "INSERT INTO comments(username, film_id, yorum_puan,baslik_yorum, yorum,tarih )
            VALUES ('$user_name', '$film_id', '$yorum_puan', '$baslik_yorum', '$yorum','$tarih')";



if ($conn->query($sql) === TRUE) {
    $meanRank = $conn->query("SELECT AVG(yorum_puan) as Ort FROM comments WHERE  film_id='".$film_id."'");
    $a = mysqli_fetch_assoc($meanRank);
    $rank = (int)$a["Ort"];
    $sqlRank = "UPDATE film
    SET puan='".$rank."'
    WHERE id='".$film_id."' ";
    $conn->query($sqlRank);
    echo "OK";
} else {
    echo "Yorum Yapılamadı";
}
?>