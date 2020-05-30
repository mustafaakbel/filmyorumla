<?php
include("dbconnect.php");
session_start();

    $target = "images/uploads/".basename($_FILES['image']['name']);
    $movie_name = $_POST["movie_name"];
    $point = $_POST["point"];
    $release_date = $_POST["release_date"];
    $director = $_POST["director"];
    $time = $_POST["time"];
    $imdb_point = $_POST["imdb_point"];
    $explanation = $_POST["explanation"];
    $image = $_FILES['image']['name'];
    $category = $_POST['skills'];
if(isset($_POST['add_movie'])){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "uploaded";
        echo "</br>";
    }else{
        echo "error";
    }
}
/*$movie_name = $_POST["movie_name"];
$point = $_POST["point"];
$release_date = $_POST["release_date"];
$director = $_POST["director"];
$time = $_POST["time"];
$imdb_point = $_POST["imdb_point"];
$explanation = $_POST["explanation"];
$image = $_POST["image"];
*/
$sql = "INSERT INTO film(name,puan,cikis_tarih,yonetmen,zaman,aciklama,imdb_puan,gorsel,kategori) values ('$movie_name','$point','$release_date','$director','$time','$explanation','$imdb_point','$target','$category')";

if ($conn->query($sql) === TRUE) {
    echo "Film eklendi";
    echo "</br>";
}else{
    echo "Film Eklenemedi";
}
$message = "Film eklendi";
echo "<script type='text/javascript'>alert('$message');</script>";
$url="http://localhost/filmyorumla/addfilm.php";
header("Location: ".$url);
?>