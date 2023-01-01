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
            <div class="col-lg-3" style="background-color: #D2B48C;">
                <!-- START SIDEBAR -->
                <?php
                require "sidebarmg.php";
                ?>
                <!-- END SIDEBAR -->
            </div>

            <div class="col-lg-9" style="background-color: #FFEBCD;">
                <!-- start content -->
                <h1 class="ms-0" style="text-align: center;">TAMBAH KARYAWAN</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <form>
                                        <center>
                                            <div class="col mb-2">
                                                <label for="inputid" class="col-sm-2 col-form-label">Id Karyawan</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control border-0" id="inputid" style="background-color: #F5F5DC;">
                                            </div>
                                            <div class="col mb-2">
                                                <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control border-0" id="inputnama" style="background-color: #F5F5DC;">
                                            </div>
                                            <div class="col mb-2">
                                                <label for="inputposisi" class="col-sm-2 col-form-label">Posisi</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="posisi" class="form-control border-0" id="inputposisi" style="background-color: #F5F5DC;">
                                            </div>
                                            <div class="col mb-2">
                                                <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control border-0" id="inputalamat" style="background-color: #F5F5DC;">
                                            </div>
                                            <div class="col mb-2">
                                                <label for="inputtelp" class="col-sm-2 col-form-label">No. Telp</label>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control border-0" id="inputtelp" style="background-color: #F5F5DC;">
                                            </div>
                                        </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <div class="d-grid gap-2 d-md-block">
                                    <center>
                                        <button class="btn" type="submit" style="background-color: #D2B48C;">Tambah</button>
                                        <a href="karyawan.php" class="btn link-dark" style="background-color: #D2B48C;">Edit</a>
                                    </center>
                                </div>
                            </div>
                        </div>
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