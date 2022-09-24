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
	{{-- End Of Component Navbar --}}
	<div class="container-xl ">
		<div class="row p-5">
			<div class="col-sm-12 col-md-6">
				<img class="w-100" src="/img/logo-ps.png" alt="Logo PS">
			</div>
			<div class="col-sm-12 col-md-6">
				<div>
					<h3>ABOUT US</h3>
					<h4>PT JUARA AGRONIAGA SEJAHTERA</h4>
					<p class="text-intro text-justify ">PT Juara Agroniaga Sejahtera adalah sebuah poultry shop
						yang
						didirikan pada tahun 2006 dengan memadukan teknologi dan pengembangan kapabilitas tim untuk
						mendapatkan kemajuan bersama, serta mengajak & mensupport komunitas tumbuh secara bersama &
						berkelanjutan di mata rantai industri pangan.</p>
				</div>
			</div>
		</div>
		<div class="row p-5">
			<div class="visi text-center mb-2 text-uppercase">
				<h1>Visi</h1>
				<p class="fw-bold">
					• Meningkatkan kesejahteraan Masyarakat dengan peningkatan produktifitas & kualitas sumber pangan
				</p>
			</div>
			<div class="misi text-center text-uppercase">
				<h1>Misi</h1>
				<p class="mb-0 fw-bold">
					• Menggabungkan sumber daya manusia bermental juara & memiliki komitmen kuat dalam peningkatan mutu
					kehidupan
				</p>
				<p class="mb-0 fw-bold">
					• Memberikan support management & transfer pengetahuan serta teknologi kepada pelaku produksi
					peternakan untuk menghasilkan produktifitas tinggi dengan kualitas terjamin & kompetitif
				</p>
				<p class="mb-0 fw-bold">
					• Berperan aktif dalam membangun rantai “feed for food”, agar terwujud kecukupan konsumsi protein &
					nutrisi yang baik untuk membantu mencerdaskan kehidupan bangsa & menciptakan kemakmuran nasional.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h1 class="text-center text-uppercase">Our Team</h1>
			</div>
		</div>
		<div class="row p-5 justify-content-center">
			<x-profile />
			<x-profile />
			<x-profile />
			<x-profile />
			<x-profile />
			<x-profile />
		</div>
	</div>
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-leftcol">
					<p><span class="bold-16p">About Us</span>
						<br>
						Visi & Misi<br>
						New York, NY 10035 - <a href="#">info@domain.com</a>
					</p>
				</div>
				<div class="col-md-4 footer-leftcol">
					<p><span class="bold-16p">AOD New York</span><br>
						2250 Lexington Avenue<br>
						New York, NY 10035 - <a href="#">info@domain.com</a>
					</p>
				</div>
				<div class="col-md-4 footer-leftcol">
					<p><span class="bold-16p">AOD New York</span><br>
						2250 Lexington Avenue<br>
						New York, NY 10035 - <a href="#">info@domain.com</a>
					</p>
				</div>
				<div class="col-md-4 footer-leftcol">
					<p><span class="bold-16p">AOD New York</span><br>
						2250 Lexington Avenue<br>
						New York, NY 10035 - <a href="#">info@domain.com</a>
					</p>
				</div>
				<div class="col-md-4 footer-midcol">
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