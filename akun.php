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
                <h1 class="ms-0" style="text-align: center;">Create Account</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <center>
                                        <div class="col mb-2">
                                            <label for="inputid" class="col-sm-2 col-form-label">Id Karyawan</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control border-0" id="inputid" style="background-color: #F5F5DC;">
                                        </div>
                                        <div class="col mb-2">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="email" class="form-control border-0" id="inputEmail3" style="background-color: #F5F5DC;">
                                        </div>
                                        <div class="col mb-2">
                                            <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control border-0" id="inputpassword" style="background-color: #F5F5DC;">
                                        </div>
                                        <div class="col mb-2">
                                            <label for="inputcompas" class="col-sm-2 col-form-label">Confirmation</label>
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control border-0" id="inputcompas" style="background-color: #F5F5DC;">
                                        </div>
                                    </center>
                                </form>
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
                                        <button class="btn" type="submit" style="background-color: #D2B48C;">Create</button>
                                        <a href="list_akun.php" class="btn link-dark" style="background-color: #D2B48C;">List Acc</a>
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