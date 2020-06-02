<!DOCTYPE html>
<?php
	include("dbconnect.php");
	session_start();
?>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- homev2_light16:29-->
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
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	

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
<!-- BEGIN | Header -->
<header class="ht-header full-width-hd" id="header-light">
		<div class="row">
			<?php include("inc/navmenu.php"); ?>
	    <!-- search form -->
		</div>
	
</header>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
	    	<div class="slick-multiItemSlider">
				<?php
					$getFilmsSlider = $conn->query("SELECT * FROM film  ORDER BY imdb_puan DESC");
					while ($row = mysqli_fetch_assoc($getFilmsSlider)) {   ?>
						<div class="movie-item">
							<div class="mv-img">
								<a href="#"><img src="<?php echo $row["gorsel"] ?>" alt="" width="285" height="437"></a>
							</div>
							<div class="title-in">
								<div class="cate">
									<?php
									$kelimeler = explode(",",$row["kategori"]);
									foreach ($kelimeler as $key => $value) { 
										$kategori = $conn->query("SELECT * FROM kategori WHERE id='".$value."'");
										$kat = mysqli_fetch_assoc($kategori)?>

											<span class="blue"><a href="#"><?php echo $kat["kategori"] ?></a></span>
									<?php
									}
									?>
								</div>
								<h6><a href="#"><?php echo $row["name"] ?></a></h6>
								<p><i class="ion-android-star"></i><span><?php echo $row["imdb_puan"] ?></span> /10</p>
							</div>
						</div>
						
					<?php } ?>
	    	</div>
	    </div>
	</div>
</div>
		<div class="buster-light">

						
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>POPULER</h2>
			</div>
			    <div class="tab-content">
			        <div id="tab1" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								<?php
									$getFilms = $conn->query("SELECT * FROM film ORDER BY puan DESC");
									while ($row = mysqli_fetch_assoc($getFilms)) {   ?>
			            				<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="<?php echo $row["gorsel"]; ?>" alt="">
												</div>
												<div class="hvr-inner">
													<a  href="moviesingle_light.php?film_id=<?php echo $row['id'] ?>"> Daha Fazla <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#"><?php echo $row["name"]; ?></a></h6>
													<p><i class="ion-android-star"></i><span><?php echo $row["puan"]; ?></span> /10</p>
												</div>
											</div>
										</div>
								<?php } ?>

			            	</div>
			            </div>
			        </div>
			    </div>
		</div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>IMDB PUANI</h2>
				</div>
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
							<?php
								$getFilmsIMDB = $conn->query("SELECT * FROM film  ORDER BY imdb_puan DESC limit 8");
									while ($row = mysqli_fetch_assoc($getFilmsIMDB)) {   ?>
			            				<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="<?php echo $row["gorsel"]; ?>" alt="">
												</div>
												<div class="hvr-inner">
													<a  href="moviesingle_light.php?film_id=<?php echo $row['id'] ?>"> Daha Fazla <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#"><?php echo $row["name"]; ?></a></h6>
													<p><i class="ion-android-star"></i><span><?php echo $row["imdb_puan"]; ?></span> /10</p>
												</div>
											</div>
										</div>
								<?php } ?>
			            	</div>
			            </div>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--end of latest new v2 section-->
		</div>
<!-- footer v2 section-->
<?php include("inc/footer.php"); ?>
<!-- end of footer v2 section-->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>

<!-- homev2_light16:30-->
<script type="text/javascript">
	
</script>
</html>
