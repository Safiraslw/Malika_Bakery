<?php
require "proses/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM neraca");
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
                <h1 class="ms-0" style="text-align: center;">Laporan Laba Rugi</h1>
                <div>
                <table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>
                                    <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama Akun</th>
                                            <th scope="col">Kredit</th>
                                            <th scope="col">Debit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 0;
                                        while($hasil=mysqli_fetch_array($sql)) {
                                        $no++;
                                        ?>
                                    <tr>
                                            <th scope="row"><?php echo $no;?></th>
                                            <td><?php echo $hasil['tanggal'] . "<br>";?></td>
                                            <td><?php echo $hasil['nama_akun'] . "<br>";?></td>
                                            <td><?php echo $hasil['kredit'] . "<br>";?></td>
                                            <td><?php echo $hasil['debit'] . "<br>";?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        <!-- <tr>
                                            <th scope="row">2</th>
                                            <td>GGGGG</td>
                                            <td>HHHHH</td>
                                            <td>IIIII</td>
                                            <td>JJJJJ</td>
                                            <td>KKKKK</td>
                                            <td>LLLLL</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>MMMMM</td>
                                            <td>NNNNN</td>
                                            <td>OOOOO</td>
                                            <td>PPPPP</td>
                                            <td>QQQQQ</td>
                                            <td>RRRRR</td>
                                        </tr> -->

                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button class="btn" type="button" style="margin-top: 50px; background-color: #D2B48C">
                                    <a href="proses/proses_laporan_laba.php" class="btn btn-sm">
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