<?php
include "proses/koneksi.php";
?>
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
                <h1 class="ms-0" style="text-align: center;">Struk Pembayaran</h1>
                <div>
                <table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nomor Struk</th>
                                            <td scope="col">0000 0001</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <th scope="row">Tanggal</th>
                                            <td><?php echo date('d-m-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kasir</th>
                                            <td>Anisa Safira</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">No.</th>
                                            <th>Nama Item</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cokelat Keju</td>
                                            <td>2</td>
                                            <td>5.000</td>
                                            <td>10.000</td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Item :</th>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Bayar</th>
                                            <td>20.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button class="btn" type="button" style="margin-top: 50px; background-color: #D2B48C">
                                    <a href="proses/proses_struk.php" class="btn btn-sm">
                                    Print<i class="glyphicon glyphicon-download-alt"></i>
                                    </a>
                                    </button>
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