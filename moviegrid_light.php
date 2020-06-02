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

<!-- moviegrid_light16:30-->
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

<?php include("inc/login_signup.php"); ?>
<!-- BEGIN | Header -->
<header class="ht-header full-width-hd" id="header-light">
		<div class="row">
			<?php include("inc/navmenu.php"); ?>
	    <!-- search form -->
		</div>
	
</header>
<!--end of preloading-->
<!--login form popup-->
<!--end of login form popup-->
<!--signup form popup-->
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<!-- END | Header -->

<div class="buster-light">
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Film Listesi</h1>
					<ul class="breadcumb">
						<li class="active"><a href="index.php">Ana Sayfa</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Filmler</li>
						<li> <span class="ion-ios-arrow-right"></span>Tüm Filmler</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist">
				<?php
					$getFilmsIMDB = $conn->query("SELECT * FROM film");
					while ($row = mysqli_fetch_assoc($getFilmsIMDB)) {   ?>
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="<?php echo $row["gorsel"]; ?>" alt="">	
							<div class="hvr-inner">
								<a  href="moviesingle_light.php?film_id=<?php echo $row['id'] ?>"> Daha Fazla <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#"><?php echo $row["name"]; ?></a></h6>
								<p><i class="ion-android-star"></i><span><?php echo $row["imdb_puan"]; ?></span> /10</p>
							</div>
						</div>	
					<?php } ?>				
				</div>		
			
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Film Ara</h4>
						<form class="form-style-1" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Film Adı</label>
									<input type="text" placeholder="Film Adı">
								</div>
								<div class="col-md-12 form-it">
									<label>Türler ve Alt Türler</label>
									<div class="group-ip">
										<select
											name="skills" multiple="" class="ui fluid dropdown">
											<option value="">Türleri filtrelemek için girin</option>
											<?php
												$allKategori = $conn->query("SELECT * FROM Kategori");
												while ($row = mysqli_fetch_array($allKategori)) {?>
													<option value="<?php echo $row["id"] ?>"><?php echo $row["kategori"] ?></option>
											<?php		
												}
											?>
										</select>
									</div>	
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit">
								</div>
							</div>
						</form>
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

<!-- moviegrid_light16:30-->
</html>