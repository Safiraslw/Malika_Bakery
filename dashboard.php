<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css" />
</head>

<body>
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-3"  style="background-color: #D2B48C;">
                <!-- START SIDEBAR -->
                <?php
                require "sidebar.php";
                ?>
                <!-- END SIDEBAR -->
            </div>

            <div class="col-lg-9" style="background-color: #FFEBCD;">
                <!-- start content -->
                <h1 class="ms-0" style="text-align: center;">DASHBOARD</h1>
                <div class="row mt-5">
                <p class="ms-0" style="text-align: center;">Segera Kadaluarsa</p>
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="images/cake.jpg" class="d-block w-100" alt="..." style="float: center; height: 450px; width: 350px;">
                                <div class="carousel-caption d-none d-md-block mt-5">
                                    <h5>Bento Cake</h5>
                                    <p>IDR 50.000</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="images/cookies.jpg" class="d-block w-100" alt="..." style="float: center; height: 450px; width: 350px;">
                                <div class="carousel-caption d-none d-md-block mt-5">
                                    <h5>Cookies</h5>
                                    <p>IDR 25.000</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/puding.jpg" class="d-block w-100" alt="..." style="float: center; height: 450px; width: 350px;">
                                <div class="carousel-caption d-none d-md-block mt-5">
                                    <h5>Glass Puding</h5>
                                    <p>IDR 30.000</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </div>

    </div>
    </div>

    <!-- Page level custom scripts -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>