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

<!-- userprofile_light16:31-->
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
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--signup form popup-->
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
						<li> <span class="ion-ios-arrow-right"></span>Profil</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="buster-light">
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Kullanıcı Detayları</p>
						<ul>
							<li  class="active"><a href="userprofile.html">Profil</a></li>
							<li><a href="userfavoritegrid_light.php?username=<?php echo $_SESSION['username'] ?>">Favori Filmler</a></li>
							<li><a href="userrate.html">Yorumladığı Filmler</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Diğer</p>
						<ul>
							<li><a href="#">Şifre Değiştir</a></li>
							<li onclick="cikisYap()"><a href="#">Çıkış Yap</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="form-style-1 user-pro" action="#">
					<form action="#" class="user">
						<h4>01. Profil Detayları</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Kullanıcı Adı</label>
								<input disabled type="text" id="profil_username" value="<?php echo $user["username"] ?> ">
							</div>
							<div class="col-md-6 form-it">
								<label>Email</label>
								<input type="text" id="profil_mail" value="<?php echo $user["email"] ?>">
								<input type="hidden" id="profil_mail_old" value="<?php echo $user["email"] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Ad</label>
								<input type="text" id="profil_name" value="<?php echo $user["name"] ?> ">
							</div>
							<div class="col-md-6 form-it">
								<label>Soyad</label>
								<input type="text" id="profil_lastname" value="<?php echo $user["lastname"] ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" id="profil_güncelle" type="submit"  value="Kaydet">
							</div>
						</div>	
					</form>
					<form action="#" class="password">
						<h4>02. Şifre Değiştir</h4>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Eski Şifre</label>
								<input type="text" placeholder="**********">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Yeni Şifre</label>
								<input type="text" placeholder="***************">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 form-it">
								<label>Yeni Şifre Tekrar</label>
								<input type="text" placeholder="*************** ">
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<input class="submit" type="submit" value="Değiştir">
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
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
<script>

$("#profil_güncelle").click(function(){
    var username = $("#profil_username").val();
    var profil_mail = $("#profil_mail").val();
    var profil_mail_old = $("#profil_mail_old").val();
    var profil_name = $("#profil_name").val();
    var profil_lastname = $("#profil_lastname").val();

    $.ajax({
        type: "POST",
        url: "profil_update.php",
        data : {username:username,profil_mail:profil_mail,profil_name:profil_name,profil_lastname:profil_lastname,profil_mail_old:profil_mail_old},
        success: function(data)
        {
            if(data == "OK"){
                 Swal.fire({
                     icon: 'success',
                     title: 'Güncellendi',
                     showConfirmButton: false,
                     timer: 1500
                     })
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
     return false;

})
</script>
<!-- userprofile_light16:31-->
</html>