<?php
require "proses/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_buku");

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
                <h1 class="ms-0" style="text-align: center;">Laporan Barang Masuk</h1>
                <div>
                <table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>
                                    <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Tanggal Masuk</th>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Tanggal Kadaluarsa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        while($hasil=mysqli_fetch_array($sql)) {
                                        $no++;
                                        ?>
                                    <tr>
                                            <th scope="row"><?php echo $no; ?></th>
                                            <td><?php echo $hasil['Tanggal_masuk'] . "<br>";?></td>
                                            <td><?php echo $hasil['Kode_buku'] . "<br>";?></td>
                                            <td><?php echo $hasil['Judul'] . "<br>";?></td>
                                            <td><?php echo $hasil['Stok'] . "<br>";?></td>
                                            <td><?php echo $hasil['Jumlah_halaman'] . "<br>";?></td>
                                            <td><?php echo $hasil['Tahun_terbit'] . "<br>";?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    <!-- <tr>
                                            <th scope="row">1</th>
                                            <td>AAAAA</td>
                                            <td>BBBBB</td>
                                            <td>CCCCC</td>
                                            <td>DDDDD</td>
                                            <td>EEEEE</td>
                                            <td>FFFFF</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>GGGGG</td>
                                            <td>HHHHH</td>
                                            <td>IIIII</td>
                                            <td>JJJJJ</td>
                                            <td>KKKKK</td>
                                            <td>LLLLL</td>
                                        </tr> -->


                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button class="btn" type="button" style="margin-top: 50px; background-color: #D2B48C">
                                    <a href="proses/proses_laporan_masuk.php" class="btn btn-sm">
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