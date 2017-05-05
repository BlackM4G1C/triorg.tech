<?php include 'header.php'; ?>

<body>
	<div class="navbar-fixed-top navbar navbar-default">
		<div class="navbar-header">
			<a href="#mynav" type="button" class="navbar-toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-brand">
				<a href="index.php">
					<span><img src="img/background.jpg"> TRI Organization</span>
				</a>
			</div>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav nav navbar-right" id="mainNav">
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="#">FORUM</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CHAT</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">LOGIN</a></li>
			</ul>
		</div>
	</div>
	<nav id="mynav"></nav>

	<div class="carousel slide" data-ride="carousel" id="mainCarousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/background.jpg">
			</div>
			<div class="item">
				<img src="img/background.jpg">
			</div>
			<div class="item">
				<img src="img/background.jpg" alt="">
			</div>
		</div>

		<a href="#mainCarousel" class="left carousel-control" data-slide="prev">
			<i class="fa fa-angle-left" aria-hidden="true"></i>
		</a>
		<a href="#mainCarousel" class="right carousel-control" data-slide="next">
			<i class="fa fa-angle-right" aria-hidden="true"></i>
		</a>
	</div>
</body>

<?php include 'footer.php'; ?>
