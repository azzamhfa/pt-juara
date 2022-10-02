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
        <div class="d-flex justify-content-center">

            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="photo-tab" data-bs-toggle="pill" data-bs-target="#photo"
                        type="button" role="tab" aria-controls="photo" aria-selected="true">PHOTO</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="video-tab" data-bs-toggle="pill" data-bs-target="#video" type="button"
                        role="tab" aria-controls="video" aria-selected="false">VIDEO</button>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content p-3 mt-5 mb-5">
            <div class="tab-pane active" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                <div class="row g-5 wp5">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=1U1GdmC_5f7ErE2UInZ9xd8QoVMHMy0X4" width="100%"
                            height="100%" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=14N1aEpf1YJK18g144hAF8LduBRy_nqZF" width="100%"
                            height="100%" allow="autoplay" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=1qjVjh1wLmwtV4vgtmG82IYfIFpMUTJYu" alt="" width="100%"
                            height="100%">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=1h6smSH_hM7VwE6_AJg53ANkS3QxZ1Loc" alt="" width="100%"
                            height="100%">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=1xeBSABauNHu_clcsB8zrHROSyoYQzQSb" alt="" width="100%"
                            height="100%">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="https://drive.google.com/uc?id=1h7XdeDgydj2SGlnfpXe4mPHsqKfjgvpj" alt="" width="100%"
                            height="100%">
                    </div>
                </div>
            </div>
            <div class="tab-pane" style="min-height: 70vh" id="video" role="tabpanel" aria-labelledby="video-tab">
                <div class="row g-5 wp-5">
                    <div class="col-xs-12 col-sm-6 col-md-6" style="min-height: 40vh">
                        <iframe src="https://drive.google.com/file/d/1CBy39dyamDNETLMxf1xcWuMJbQQ-Hjju/preview"
                            width="100%" height="100%" allow="autoplay"></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6" style="min-height: 40vh">
                        <iframe src="https://drive.google.com/file/d/1Y6KHCBiek61tkDcxMf4AYC1_QuMSOSkX/preview"
                            width="100%" height="100%" allow="autoplay"></iframe>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/waypoints.min.js"></script>
</body>

</html>