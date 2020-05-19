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
				    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li><a href="index.php">Anasayfa</a></li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							filmler<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">	
								<li><a href="moviegrid_light.html">Tüm Filmler</a></li>
							</ul>
						</li>
					</ul>
					<?php if(@$_SESSION["oturum"] !== TRUE){?>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="loginLink"><a href="#">Giriş</a></li>
						<li class="btn signupLink"><a href="#">Kayıt Ol</a></li>
					</ul>
					<?php	}else{ ?>
						<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							<?php echo $_SESSION["username"] ?><i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">	
								<li><a href="userprofile_light.php?username=<?php echo $_SESSION['username'] ?>">Profil</a></li>
								<li onclick="cikisYap()"><a href="#">Çıkış</a></li>
							</ul>
						</li>
					</ul>
					<?php }?>
				</div>
	    </nav>