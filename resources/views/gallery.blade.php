<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery of PT Juara Agroniaga Sejahtera</title>
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
    <div class="container">
        <div class="row p-5">
            <div class="col-12 d-flex justify-content-center">
                <h1>Gallery</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button id="image" class="">Photo</button>
            </div>
            <div class="col-6">
                <button id="video" class="">Video</button>
            </div>
        </div>
        <h1>Bootstrap 5 with Masonry</h1>
        <div id="image-container" class="row row-cols-1 row-cols-md-3 g-4"
            data-masonry='{"percentPosition": true,  "itemSelector": ".col" }'>
            <div class="col">
                <div class="card" style="width: 200px; height: 100px">
                    <img src="https://drive.google.com/uc?id=1kuDHRnmQ7omAJ8TPdZ01b_6BhhqHn3uR" alt="" srcset="">
                </div>
            </div>
        </div>
        <div id="image-container" class="row row-cols-1 row-cols-md-3 g-4"
            data-masonry='{"percentPosition": true,  "itemSelector": ".col" }'>
            <div class="col">
                <div class="card" style="width: 200px; height: 100px">
                    <img src="https://drive.google.com/uc?id=1kuDHRnmQ7omAJ8TPdZ01b_6BhhqHn3uR" alt="" srcset="">
                </div>
            </div>
        </div>
        <footer id="contact">
            <div class="container text-center p-1">
                PT. Juara Agroniaga Sejahtera - 2022
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap' s JavaScript plugins)-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
            async></script>
        <script>
            $(document).ready(function(){
        $("#image").click(function(){
            $("#image-container").fadeOut();
            $("#video-container").fadeIn();
        });
        $("#video").click(function(){
            $("#video-container").fadeOut();
            $("#image-container").fadeIn();
        });
    });
        </script>

</body>

</html>