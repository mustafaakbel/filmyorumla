<?php
include("dbconnect.php");
session_start();

    $target = "images/uploads/".basename($_FILES['image']['name']);
    $movie_name = $_POST["movie_name"];
    $point = $_POST["point"];
    $release_date = $_POST["release_date"];
    $date = new DateTime($release_date);
    $release_date = $date->format('d.m.Y');
    $director = $_POST["director"];
    $time = $_POST["time"];
    $imdb_point = $_POST["imdb_point"];
    $explanation = $_POST["explanation"];
    $image = $_FILES['image']['name'];
    $category = $_POST['skills'];
    $ytlink = $_POST['ytlink'];
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
$sql = "INSERT INTO film(name,puan,cikis_tarih,yonetmen,zaman,aciklama,imdb_puan,gorsel,kategori,ytlink) values ('$movie_name','$point','$release_date','$director','$time','$explanation','$imdb_point','$target','$category','$ytlink')";
$checkName = $conn->query("SELECT * FROM film WHERE name='".$movie_name."'");
if(mysqli_num_rows($checkName) > 0){
    echo "Bu isimde film vardır";
}
if ($conn->query($sql) === TRUE) {
    echo "Film eklendi";
}else{
    echo "Film Eklenemedi";
}

$getFilm = $conn->query("SELECT * FROM film WHERE name='".$movie_name."'");
$film = mysqli_fetch_array($getFilm);

//$message = "Film eklendi";
//echo "<script type='text/javascript'>alert('$message');</script>";
$url="http://localhost/filmyorumla/moviesingle_light.php?film_id=".$film['id'].".php";
header("Location: ".$url);
?>