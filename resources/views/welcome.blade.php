<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yebo HTML5 CSS3 Template</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css?v=1.2" rel="stylesheet">
	<link href="css/queries.css?v=1.2" rel="stylesheet">
	<link rel="stylesheet" href="css/flexslider.css?v=1.2" type="text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
	{{-- Component Navbar --}}
	<x-navbar />
	<div class="container-fluid intro w-75 p-3" id="about">
		<div class="d-flex">
			<div class="d-flex align-items-center flex-column p-5">
				<img class="w-25" src="/img/logo-ps.png" alt="Logo PS">
				<!-- <h1 class="text-center fs-4">PT Juara Agroniaga Sejahtera</h1> -->
				<p class="text-intro text-justify">PT Juara Agroniaga Sejahtera adalah sebuah poultry shop yang
					didirikan pada tahun 2006 dengan memadukan teknologi dan pengembangan kapabilitas tim untuk
					mendapatkan kemajuan bersama, serta mengajak & mensupport komunitas tumbuh secara bersama &
					berkelanjutan di mata rantai industri pangan.</p>
				<button type="button" class="btn btn-outline-secondary">Discover More</button>
			</div>
			<div class="d-flex align-items-center justify-content-evenly flex-column p-5">
				<div class="visi text-justify mb-2">
					<h1>Visi</h1>
					Meningkatkan kesejahteraan Masyarakat dengan peningkatan produktifitas & kualitas sumber pangan
				</div>
				<div class="misi text-justify">
					<h1>Misi</h1>
					Menggabungkan sumber daya manusia bermental juara & memiliki komitmen kuat dalam peningkatan mutu
					kehidupan
					<br>
					Memberikan support management & transfer pengetahuan serta teknologi kepada pelaku produksi
					peternakan untuk menghasilkan produktifitas tinggi dengan kualitas terjamin & kompetitif
					<br>
					Berperan aktif dalam membangun rantai “feed for food”, agar terwujud kecukupan konsumsi protein &
					nutrisi yang baik untuk membantu mencerdaskan kehidupan bangsa & menciptakan kemakmuran nasional.

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="d-flex flex-column col-md-8 nopadding align-items-center justify-content-center wp1 p-5"
				id="work">
				<h1 class="text-center">Our Business</h1>
				<div class="d-flex justify-content-center flex-wrap">
					<div class="d-flex card p-3 m-3 align-items-center justify-content-center" style="width: 12rem;"
						id="poultry">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Poultry Shop</h1>
						</div>
					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;" id="trading">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center">Trading Bahan Baku Pakan & Home Mixer</h5>
						</div>
					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Farm Ayam Jantan</h1>
						</div>

					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body ">
							<h4 class="card-title text-center">Fattening & Trading Domba</h1>
						</div>

					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">Breeding Domba</h1>
						</div>

					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">RPA & RPH</h1>
						</div>

					</div>
					<div class="card p-3 m-3 align-items-center" style="width: 12rem;">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">Waralaba</h1>
						</div>

					</div>
				</div>
			</div>
			<div class="d-flex col-md-4 section-text nopadding align-items-center">
				<div class="wp4 text-center">
					<div class="frame">
						<img src="/img/kaf.png" alt="">
						<h2>Poultry Shop</h2>
					</div>
					<p>Mengembangkan gerai-gerai penjualan ayam goreng (fried chicken) dengan brand “Kaf”, sebagai usaha
						hilirisasi dan meningkatkan nilai tambah dalam bisnis</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="trading" hidden>
					<div class="frame">
						<img src="/img/kaf.png" alt="">
						<h2>Waralaba</h2>
					</div>
					<p>Mengembangkan gerai-gerai penjualan ayam goreng (fried chicken) dengan brand “Kaf”, sebagai usaha
						hilirisasi dan meningkatkan nilai tambah dalam bisnis</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" hidden id="poultry">
					<div class="frame">
						<img src="/img/kaf.png" alt="">
						<h2>Waralaba</h2>
					</div>
					<p>Mengembangkan gerai-gerai penjualan ayam goreng (fried chicken) dengan brand “Kaf”, sebagai usaha
						hilirisasi dan meningkatkan nilai tambah dalam bisnis</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
			</div>
		</div>
		<div class="row intro">
			<div class="d-flex col-md-8 col-md-offset-2 align-items-center flex-column">
				<img class="w-25" src="/img/logo-ps.png" alt="Logo PS">
				<!-- <h1 class="text-center fs-4">PT Juara Agroniaga Sejahtera</h1> -->
				<p class="text-intro">PT Juara Agroniaga Sejahtera adalah sebuah poultry shop yang didirikan pada tahun
					2006 dengan memadukan teknologi dan pengembangan kapabilitas tim untuk mendapatkan kemajuan bersama,
					serta mengajak & mensupport komunitas tumbuh secara bersama & berkelanjutan di mata rantai industri
					pangan.</p>
				<button type="button" class="btn btn-outline-primary w-25">Detai~`l</button>

			</div>
		</div>
		<!-- </div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 section-3">
				<div class="logo-3 wp3"></div>
			</div>
			<div class="col-md-4 section-text nopadding">
				<div class="wp6">
					<h2 class="front-frame">Retrò Bike - M. Hulot</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
					<div class="thin-sep"></div>
				</div>
				<div class="small-featured-img frame-red">
					<div class="arrow"></div>
				</div>
			</div>
			<div class="col-md-4 section-4"></div>
		</div>
	</div> -->
		<!-- <section class="flex-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="flex-twitter-icon"></div>
								<h2 class="twitter-post-username">
									<a href="#">AOS New York @aod</a> <span>/ 35 min</span>
								</h2>
								<p class="twitter-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor, dictum turpis vitae, pretium ante amet.</p>
							</li>
							<li>
								<div class="flex-twitter-icon"></div>
								<h2 class="twitter-post-username">
									<a href="#">AOS New York @aod</a> <span>/ 35 min</span>
								</h2>
								<p class="twitter-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. </p>
							</li>
							<li>
								<div class="flex-twitter-icon"></div>
								<h2 class="twitter-post-username">
									<a href="#">AOS New York @aod</a> <span>/ 35 min</span>
								</h2>
								<p class="twitter-post">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tellus ac nulla semper rhoncus. Nullam a odio porttitor.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section> -->
		<!-- <div class="container-fluid" id="shop">
		<div class="row">
			<div id="effect" class="effects clearfix">
				<div class="col-md-4 left nopadding">
					<div class="left-box-1">
						<div class="img">
							<img src="img/l1.jpg" alt="Leather Seats">
							<div class="overlay">
								<a href="http://google.com/" class="expand">leather seats</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="left-box-2 box">
						<div class="img">
							<img src="img/l2.jpg" alt="Custom Seats">
							<div class="overlay">
								<a href="#" class="expand">custom seats</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="left-box-btm box">
						<div class="img">
							<img src="img/l3.jpg" alt="Limited Edition">
							<div class="overlay">
								<a href="#" class="expand">limited edition</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 mid nopadding">
					<div class="mid-box-1 box">
						<div class="img">
							<img src="img/l4.jpg" alt="Shop Bags">
							<div class="overlay">
								<a href="#" class="expand">shop bags</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="mid-box-2 box">
						<div class="img">
							<img src="img/l5.jpg" alt="Shop Bikes">
							<div class="overlay">
								<a href="#" class="expand">shop bikes</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 right nopadding">
					<div class="right-box-1 box">
						<div class="img">
							<img src="img/l6.jpg" alt="Shop Now">
							<div class="overlay">
								<a href="#" class="expand">shop now</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="right-box-2 box">
						<div class="img">
							<img src="img/l7.jpg" alt="Shop Seats">
							<div class="overlay">
								<a href="#" class="expand">shop seats</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
					<div class="right-box-3 box">
						<div class="img">
							<img src="img/l8.jpg" alt="Shop Accessories">
							<div class="overlay">
								<a href="#" class="expand">shop accessories</a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
		<!-- <section class="discover">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="#" class="shop-btn">Discover The Shop</a>
				</div>
			</div>
		</div> -->
		<!-- </section>
	<section class="sign_up">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 sign-up">
					<h2 class="logo-header">Stay on the saddle!</h2>
					<form name="signup-form">
						<input class="signup-input" type="email" name="email_address" value="" placeholder="enter your email..." title="Please enter a valid email address." required>
						<button type="submit" class="submit-btn">GO</button>
					</form>
				</div>
			</div>
		</div>
	</section> -->
		<footer id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4 footer-leftcol">
						<p><span class="bold-16p">Contact Us</span>
							<br>
							PT. Juara Agroniaga Sejahtera<br>
							+62 81233383634 - <a href="#">info@domain.com</a>
						</p>
					</div>
					<div class="col-md-4 footer-midcol">
						<p><span class="bold-16p mb-5">Our Social Media</span>
						<ul>
							<li><a href="#" class="twitter-icon">Twitter</a></li>
							<li><a href="#" class="facebook-icon">Facebook</a></li>
							<li><a href="#" class="pintrest-icon">Pintrest</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 footer-rightcol">
						<!-- <p>Designed by <a href="#"><img src="img/yebo-icon.png" alt="Yebo Logo"></a></p> -->
					</div>
				</div>
			</div>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/waypoints.min.js"></script>
</body>

</html>