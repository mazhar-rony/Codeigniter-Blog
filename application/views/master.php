<!DOCTYPE html>
<html lang="en">
<head>
	<title>Food Blog - <?php echo $title;?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon --> 
    <link rel="icon" href="<?php echo base_url();?>img/burger.png" type="image/png" />  
	<!-- <link href="img/favicon.ico" rel="shortcut icon"/> -->
    
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
					<a href="#">Register</a> / 
					<a href="<?php echo base_url();?>admin_login">Login</a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="<?php echo base_url();?>" class="site-logo">
					<img src="<?php echo base_url();?>img/logo.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="<?php echo base_url();?>">Home</a></li>
					<li><a href="<?php echo base_url();?>welcome/about">Features</a></li>
					<li><a href="<?php echo base_url();?>welcome/recipes">Recipes</a></li>
					<li><a href="#">Reviews</a></li>
					<li><a href="<?php echo base_url();?>welcome/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->

    <!-- Hero section -->
    <?php if(isset($hero)) {?>
        <section class="page-top-section set-bg" data-setbg="<?php echo base_url();?>img/page-top-bg.jpg">
            <div class="container">
                <h2><?php echo $hero;?></h2>
            </div>
        </section>
    <?php }?>
    <!-- Hero section end -->

    <!-- Search section -->
    <?php if(isset($search)) {?>
        <div class="search-form-section">
            <div class="sf-warp">
                <div class="container">
                    <form class="big-search-form">
                        <select>
                            <option>All Recipes Categories</option>
                            <option>Pizza</option>
                            <option>Salads</option>
                            <option>Desserts</option>
                            <option>Side Dishes</option>
                        </select>
                        <select>
                            <option>All Ingredients</option>
                            <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                        </select>
                        <input type="text" placeholder="Search Receipies">
                        <button class="bsf-btn">Search</button>
                    </form>
                </div>
            </div>
        </div>
    <?php }?>
	<!-- Search section end -->

    <?php echo $maincontent;?>

	<!-- Gallery section -->
	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/1.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/2.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/3.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/4.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/5.jpg"></div>
			<div class="gs-item set-bg" data-setbg="<?php echo base_url();?>img/instagram/6.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="<?php echo base_url();?>img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="<?php echo base_url();?>img/logo.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>welcome/about">Features</a></li>
						<li><a href="<?php echo base_url();?>welcome/recipes">Recipes</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="<?php echo base_url();?>welcome/contact">Contact</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Food Blog is made with <i class="fa fa-heart" aria-hidden="true" style="color:#8A0303"></i> by <span style="color:#8A0303;font-weight:bold">Mazhar</span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>

    

</body>
</html>