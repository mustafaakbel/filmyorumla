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
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
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

<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">,
				<?php
					$getFilmsSlider = $conn->query("SELECT * FROM film  ORDER BY imdb_puan DESC limit 3");
					while ($row = mysqli_fetch_assoc($getFilmsSlider)) {   ?>
						<div class="movie-item">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<div class="title-in">
										<div class="cate">

										<?php
											$kelimeler = explode(",",$row["anahtar_kelime"]);
											foreach ($kelimeler as $key => $value) { ?> 
												<span class="blue"><a href="#"><?php echo $value ?></a></span>
											<?php
											}
										?>
											</div>
											<span class="blue"><a href="#">Sci-fi</a></span>
											<span class="yell"><a href="#">Action</a></span>
											<span class="orange"><a href="#">advanture</a></span>
										<h1><a href="#">guardians of the<br>
										galaxy1 <span><?php echo explode(".",$row["cikis_tarih"])[2] ?></span></a></h1>
										<div class="social-btn">
											<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
											<a href="#" class="parent-btn"><i class="ion-heart"></i> Favorilere Ekle</a>	
										</div>
										<div class="mv-details">
											<p><i class="ion-android-star"></i><span><?php echo $row["puan"] ?></span> /10</p>
											<ul class="mv-infor">
												<li>  Süre: <?php echo $row["zaman"] ?>’ </li>
												
												<?php 
												$originalDate = $row["cikis_tarih"];
												$date = new DateTime($originalDate);?>
												<li>  <?php echo $date->format('M, d / Y'); ?></li>
											</ul>
										</div>
										<div class="btn-transform transform-vertical">
											<div><a href="#" class="item item-1 redbtn">Daha Fazla</a></div>
											<div><a href= "#" class="item item-2 redbtn hvrbtn">Daha Fazla</a></div>
										</div>		
									</div>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<div class="mv-img-2">
										<a href="#"><img src="<?php echo $row["gorsel"] ?>" alt=""></a>
									</div>
								</div>
							</div>	
						</div>

					<?php } ?>
	    	</div>
	    </div>
	</div>
</div>
		<div class="buster-light">
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>POPULER</h2>
			</div>
			<div class="tabs">
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								<?php
									$getFilms = $conn->query("SELECT * FROM film");
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
			<br><br>
			<div class="title-hd">
				<h2>IMDB PUANI</h2>
			</div>
			<div class="tabs">
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
							<?php
								$getFilmsIMDB = $conn->query("SELECT * FROM film  ORDER BY imdb_puan DESC limit 6");
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
<footer class="ht-footer full-width-ft">
	<div class="row">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Kaynaklar</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Hesaplar</h4>
				<ul>
					<li><a href="#">Mustafa AKBEL</a></li> 
					<li><a href="#">Yakup DİKMEN</a></li>	
					<li><a href="#">Tolga GÜRELİ</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>İletişim </h4>
				<p>İletişime geçmek için mailinizi giriniz.</p>
				<form action="#">
					<input type="text" placeholder="Mailinizi giriniz...">
				</form>
				<a href="#" class="btn">İletişim kur <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
		<div class="ft-copyright">
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Başa dön   <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</div>
</footer>
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
