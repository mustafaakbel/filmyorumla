<!DOCTYPE html>
<?php
	include("dbconnect.php");
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
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>giriş</h3>
        <form method="post" action="#">
        	<div class="row">
        		 <label for="username">
                    Kullanıcı Adı:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Şifre:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
           	 <button id="girisButton" type="submit">giriş</button>
           </div>
        </form>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
	

    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>kayit ol</h3>
        <form>
            <div class="row">
                 <label for="username-2">
                    kullanıcı adı:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman"  required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    mail:
                    <input type="email" name="email" id="email-2" placeholder="Mail giriniz" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    şifre:
						<!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                    <input type="password" name="password" id="password-2" placeholder=""  required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    şifre onayla:
						<!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->
                    <input type="password" name="password2" id="repassword-2" placeholder=""  required="required" />
                </label>
            </div>
           <div class="row">
             <button id="kayitButton">kayit ol</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header full-width-hd" id="header-light">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index_light.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li><a href="#">Anasayfa</a></li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							filmler<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">	
								<li><a href="moviegrid_light.html">Tüm Filmler</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="loginLink"><a href="#">Giriş</a></li>
						<li class="btn signupLink"><a href="#">Kayıt Ol</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    <!-- search form -->
		</div>
	
</header>
<!-- END | Header -->

<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Sci-fi</a></span>
			    					<span class="yell"><a href="#">Action</a></span>
			    					<span class="orange"><a href="#">advanture</a></span>
			    				</div>
			    				<h1><a href="#">guardians of the<br>
								galaxy <span>2015</span></a></h1>
								<div class="social-btn">
									<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 1 May 2015</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="images/uploads/poster1.jpg" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#">Sci-fi</a></span>
			    					<span class="yell"><a href="#">Action</a></span>
			    					<span class="orange"><a href="#">advanture</a></span>
			    				</div>
			    				<h1><a href="#">guardians of the<br>
								galaxy <span>2015</span></a></h1>
								<div class="social-btn">
									<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: 2h21’ </li>
			    						<li>  Rated: PG-13  </li>
			    						<li>  Release: 1 May 2015</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="#" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "#" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>
			    				
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="images/uploads/poster1.jpg" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
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
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="title-hd">
				<h2>IMDB PUANI</h2>
			</div>
			<div class="tabs">
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it9.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>

<script>
	$("#kayitButton").click(function(){
		var username = $("#username-2").val();
		var email = $("#email-2").val();
		var password = $("#password-2").val();
		var repassword = $("#repassword-2").val();
		$.post("user-record.php",
		{
			username: username,
			email:email,
			password:password,
			repassword:repassword

		}, function(data, status){
			alert("Data: " + data + "\nStatus: " + status);
		});

	});
</script>
<!-- homev2_light16:30-->
</html>