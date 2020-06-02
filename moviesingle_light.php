<?php
	include("dbconnect.php");
	session_start();
	$film_id = $_GET["film_id"];
	$getFilm = $conn->query("SELECT * FROM film WHERE  id='".$film_id."'");
	$film = mysqli_fetch_assoc($getFilm);
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- moviesingle_light16:30-->
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

    	<div class="buster-light">
<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="<?php echo $film["gorsel"] ?>" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Trailer İzle</a></div>
							<div><a href="<?php echo $film["ytlink"] ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?php echo $film["name"] ?> <span><?php echo explode(".",$film["cikis_tarih"])[2] ?></span></h1>
					<?php 
						$favCheck = @$conn->query("SELECT * FROM favori_filmler WHERE film_id='".$film_id."' && username='".$_SESSION['username']."' ");
					?>
					<div class="social-btn" >
						<?php if(!empty($_SESSION["username"])){?>
							<a  href="#" onclick="fav(<?php if(mysqli_num_rows($favCheck) > 0){echo '1'; }else{ echo '0'; }  ?>)" class="parent-btn"><i class="ion-heart"></i>
							<?php
							if(mysqli_num_rows($favCheck) > 0){
								echo "Favorilerden Çıkar";
							}else{
								echo "Favorilere Ekle";
							}
							?></a>	
						<?php
						} ?>
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span><?php echo $film["puan"] ?></span> /10<br>
								<?php
									$allComment  =  $conn->query("SELECT * FROM comments WHERE  film_id='".$film_id."'");
								?>
								<span class="rv"><?php echo mysqli_num_rows($allComment) ?> Yorum</span>
							</p>
						</div>
						<div class="rate-star">
							<p>Film Puanı:  </p>

							<?php 
								for ($i=0; $i < $film["puan"] ; $i++) { ?>
									<i class="ion-ios-star"></i>
								<?php
									# code...
								}
								for ($i=0; $i < (10 - $film["puan"]) ; $i++) { ?>
									<i class="ion-ios-star-outline"></i>

								<?php
								}
							?>
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Genel Bakış</a></li>
								<li><a href="#reviews">Yorumlar</a></li>
							</ul>

						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12" style="margin-top:60px">
						            		<p><?php echo $film["aciklama"] ?></p>
						            		
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Yönetmen: </h6>
						            			<p><a href="#"><?php echo $film["yonetmen"] ?></a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Kategori:</h6>
												<p><a href="#"><?php 
												$kategori = $conn->query("SELECT * FROM kategori WHERE id='".$film['kategori']."'");
												$kat = mysqli_fetch_assoc($kategori); echo $kat["kategori"] ?>  </a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Çıkış Tarihi:</h6>
												<?php 
												$originalDate = $film["cikis_tarih"];
												$date = new DateTime($originalDate);?>

												<p> <?php echo $date->format('M, d / Y'); ?></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Süresi:</h6>
						            			<p><?php echo $film["zaman"] ?> dakika</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						        <div id="reviews" class="tab review">
						           <div class="row"><br>
						            	<div class="rv-hd">
						            		<div class="div">
						       	 				<h2><?php echo $film["name"] ?></h2>
							            	</div>
						            	</div>
										<?php 
											$getComment  =  $conn->query("SELECT * FROM comments WHERE  film_id='".$film_id."'");
											while ($row = mysqli_fetch_assoc($getComment)) { ?>
											<div class="mv-user-review-item">
												<div class="user-infor">
													<img src="images/uploads/author4.png" alt="">
													<div>
														<h3><?php echo $row["baslik_yorum"] ?></h3>
														<div class="no-star">
															<?php 
																for ($i=0; $i < $row["yorum_puan"] ; $i++) { ?>
																	<i class="ion-android-star"></i>
																<?php
																	# code...
																}
																for ($i=0; $i < (10 - $row["yorum_puan"]) ; $i++) { ?>
																	<i class="ion-android-star last"></i>
																<?php
																}
															?>
														</div>
														<p class="time">
															<?php 
															$originalDate = $row["tarih"];
															$date = new DateTime($originalDate);?>
															<?php echo $date->format('M, d / Y'); ?> <a href="#"> <?php echo $row["username"] ?></a>
														</p>
													</div>
												</div>
												<p> <?php echo $row["yorum"] ?></p>
											</div>
										<?php	} ?>
											<?php if(!empty($_SESSION["username"])){?>

												<div class="col-md-9 col-sm-12 col-xs-12">
													<div class="blog-detail-ct">
														<div class="comment-form">
															<h4>Yorum bırak</h4>
															<form action="#">
																<div class="row">
																	<div class="col-md-8">
																		<input type="text" id="baslik_yorum" placeholder="Başlık">
																	</div>
																	<div class="col-md-4">
																		<input type="number" id="yorum_puan" max="10" min="0" placeholder="Puan">
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-12">
																		<textarea name="message" id="yorum" placeholder="Yorum"></textarea>
																		<input type="hidden" id="film_id" value="<?php echo $_GET["film_id"] ?>">
																	</div>
																</div>
																<input class="submit" id="yorum_yap" type="submit" placeholder="submit">
															</form>
														</div>
													</div>
												</div>
											<?php 
											} ?>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
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
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
<script type="text/javascript">
function fav(status) {
	var film_id = "<?php echo  $film_id ?>";
	var username = "<?php echo  $_SESSION['username'] ?>";
	$.ajax({
       type: "POST",
       url: "fav.php",
       data : {film_id:film_id,username:username,status:status},
       success: function(data)
       {
           if(data == "OK"){
			   if(status == "1"){
                Swal.fire({
                    icon: 'success',
                    title: 'Favorilerden Çıkarıldı',
                    showConfirmButton: false,
                    timer: 1500
                    })
			   }else{
				Swal.fire({
                    icon: 'success',
                    title: 'Favorilere Eklendi',
                    showConfirmButton: false,
                    timer: 1500
                    })
			   }
                    location.reload();
           }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data,
                })
           }
       }
	});
}
</script>
<!-- moviesingle_light16:30-->
</html>