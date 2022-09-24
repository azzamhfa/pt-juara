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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
			<div class="d-flex flex-column col-md-8 nopadding align-items-center justify-content-center wp1 p-5" id="work">
				<h1 class="text-center text-light">Our Business</h1>
				<div class="d-flex justify-content-center flex-wrap">
					<div class="shadow d-flex card p-3 m-3 align-items-center justify-content-center" style="width: 12rem;" id="poultry">
						<img src="/img/jaringan.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Poultry Shop</h1>
						</div>
					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="trading">
						<img src="/img/pakan.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h5 class="card-title text-center">Trading Bahan Baku Pakan & Home Mixer</h5>
						</div>
					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="ayam">
						<img src="/img/ayam.png" class="card-img-top w-75" alt="...">
						<div class="card-body">
							<h4 class="card-title text-center">Farm Ayam Jantan</h1>
						</div>

					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="dombaA">
						<img src="/img/domba.png" class="card-img-top w-75" alt="...">
						<div class="card-body ">
							<h4 class="card-title text-center">Fattening & Trading Domba</h1>
						</div>

					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="dombaB">
						<img src="/img/domba2.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">Breeding Domba</h1>
						</div>

					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="rph">
						<img src="/img/rph.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">RPA & RPH</h1>
						</div>

					</div>
					<div class="shadow 	card p-3 m-3 align-items-center" style="width: 12rem;" id="kaf">
						<img src="/img/kaf.png" class="card-img-top w-75" alt="...">
						<div class="card-body">

							<h4 class="card-title text-center">Waralaba</h1>
						</div>

					</div>
				</div>
			</div>
			<div class="d-flex col-md-4 section-text nopadding align-items-center">
				<div class="wp4 text-center" id="jaringan1">
					<div class="frame">
						<img src="/img/jaringan.png" alt="">
						<h2>Poultry Shop</h2>
					</div>
					<p>Mengembangkan gerai-gerai penjualan ayam goreng (fried chicken) dengan brand “Kaf”, sebagai usaha
						hilirisasi dan meningkatkan nilai tambah dalam bisnis</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="trading1" style="display: none;">
					<div class="frame">
						<img src="/img/pakan.png" alt="">
						<h2>Trading Bahan Baku Pakan & Home Mixer</h2>
					</div>
					<p>Menjual bahan-bahan baku pakan ternak non-feedmill serta memproduksi campuran pakan ternak dengan menggunakan beberapa bahan baku local untuk kalangan terbatas (customer) sebagai total solution bagi customer
					</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="ayam1" style="display: none;">
					<div class="frame">
						<img src="/img/ayam.png" alt="">
						<h2>Farm Ayam Jantan</h2>
					</div>
					<p>Mengembangkan kemitraan ayam jantan bekerjasama dengan peternak, untuk membangun jalinan Kerjasama bisnis yang saling menguntungkan</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="domba1" style="display: none;">
					<div class="frame">
						<img src="/img/domba.png" alt="">
						<h2>Fattening dan Trading Domba</h2>
					</div>
					<p>Bisnis baru, sebuah bisnis kolaborasi untuk menambah portofolio bisnis, menjadi peluang ke depan dalam memenuhi kebutuhan akan daging kambing/ domba</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="domba2" style="display: none;">
					<div class="frame">
						<img src="/img/domba2.png" alt="">
						<h2>Breeding Domba</h2>
					</div>
					<p>Sebuah bisnis rintisan yang bertujuan menjaga kelangsungan pasok atas bisnis penggemukan & trading yang sudah ada serta menjamin kualitas & kuantitas bibit untuk membantu menjaga pasokan bibit nasional</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="rph1" style="display: none;">
					<div class="frame">
						<img src="/img/rph.png" alt="">
						<h2>RPA & RPH</h2>
					</div>
					<p>Rumah Potong Unggas & Rumah Potong Hewan sebagai rantai bisnis yang potensial untuk membangun efiensi bisnis sertai mata rantai bisnis dalam meningkatkan daya saing usaha</p>
					<div class="thin-sep"></div>
					<button type="button" class="btn btn-outline-primary w-50">Detail</button>
				</div>
				<div class="wp4 text-center" id="kaf1" style="display: none;">
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
		<div class="row">
			<div class="col-md-4 section-text nopadding">
				<div class="wp5">
					<h2 class="mech">Our Store</h2>
					<div class="p-5">
						<p class="fs-4">Malang</p>
						<p class="fs-4">Magetan</p>
						<p class="fs-4">Kediri</p>
						<p class="fs-4">Mojokerto</p>
						<p class="fs-4">Ponorogo</p>
					</div>
				</div>
			</div>
			<div class="col-md-8 section-2 nopadding">
				<div class="wp2 text-center text-white position-absolute top-50 start-50 translate-middle">
					<h1>Our Store</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row intro wp5">
			<div class="d-flex col-md-8 col-md-offset-2 align-items-center justify-content-around">
				<img class="w-25" src="/img/logo-ps.png" alt="Logo PS">
				<div class="wraper">
					<h1 class="text-center fs-4">Contact Us</h1>
					<p class="text-center">
						Villa Bukit Sengkaling AP-1,Landungsari, Jetak Lor, Mulyoagung, Dau, Malang Regency, East Java
						65151
						<br>
						+62 81233383634 - <a href="#">info@domain.com</a>
					</p>
					<ul class="d-flex justify-content-center">
						<a href="#" class="twitter-icon">Twitter</a>
						<a href="#" class="facebook-icon">Facebook</a>
						<a href="#" class="pintrest-icon">Pintrest</a>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<footer id="contact">
		<div class="container text-center p-1">
			PT. Juara Agroniaga Sejahtera - 2022
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