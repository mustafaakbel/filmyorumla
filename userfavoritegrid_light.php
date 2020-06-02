<!DOCTYPE html>
<?php
	include("dbconnect.php");
	session_start();
	if(empty($_SESSION["username"])){
		header("Location: index.php");
	}
	$getUser = $conn->query("SELECT * FROM users WHERE  username='".$_SESSION['username']."'");
	$user = mysqli_fetch_assoc($getUser);
?>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- userfavoritegrid_light16:31-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/load.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<?php include("inc/login_signup.php"); ?>

<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<?php include("inc/navmenu.php"); ?>
	</div>
</header>
<!-- END | Header -->

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1 style="text-align:left;margin-left:25%;"><?php echo $_GET["username"] ?> profil</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Anasayfa</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Favori Filmler</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="buster-light">
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Kullanıcı Detayları</p>
						<ul>
							<li ><a href="userprofile_light.php?username=<?php echo $_SESSION['username'] ?>">Profil</a></li>
							<li  class="active"><a href="userfavoritegrid_light.php?username=<?php echo $_SESSION['username'] ?>">Favori Filmler</a></li>
							<li><a href="userrate_light.php?username=<?php echo $_SESSION['username'] ?>">Yorumladığı Filmler</a></li>
							<?php if($user["moderator"]){?>
								<li><a href="addfilm.php">Film Ekle</a></li>
							<?php
							} ?>
						</ul>
					</div>
					<div class="user-fav">
						<p>Diğer</p>
						<ul>
							<li><a href="userprofile_light.php?username=<?php echo $_SESSION['username'] ?>">Şifre Değiştir</a></li>
							<li onclick="cikisYap()"><a href="#">Çıkış Yap</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist grid-fav">
						<?php
							$getFilmsId = $conn->query("SELECT film_id FROM favori_filmler WHERE username='".$_SESSION['username']."'");
							$arrayFavFilm = [];
							while ($row = mysqli_fetch_assoc($getFilmsId)) {  
								$film = mysqli_fetch_assoc($conn->query("SELECT * FROM film WHERE id='".$row['film_id']."'"));
								array_push($arrayFavFilm,$film);
							} 
							foreach ($arrayFavFilm as $key => $value) { ?>
								<div class="movie-item-style-2 movie-item-style-1 style-3">
									<img src="<?php echo $value["gorsel"]; ?>" alt="">
									<div class="hvr-inner">
										<a  href="moviesingle_light.php?film_id=<?php echo $value['id'] ?>"> Daha Fazla <i class="ion-android-arrow-dropright"></i> </a>
									</div>
									<div class="mv-item-infor">
										<h6><a  href="moviesingle_light.php?film_id=<?php echo $value['id'] ?>"><?php echo $value["name"]; ?></a></h6>
										<p class="rate"><i class="ion-android-star"></i><span><?php echo $value["puan"]; ?></span> /10</p>
									</div>
								</div>
						<?php
							}
						?>
				</div>		
			</div>
		</div>
	</div>
</div>
</div>
<!-- footer section-->
<?php include("inc/footer.php"); ?>
<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- userfavoritegrid_light16:31-->
</html>