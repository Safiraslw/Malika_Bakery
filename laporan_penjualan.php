<?php
    require "proses/koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM penjualan");
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
                <h1 class="ms-0" style="text-align: center;">Laporan Penjualan</h1>
                <div>
                <table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>

                                    <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Nomor Faktur</th>
                                            <th scope="col">Kode Produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        while($hasil=mysqli_fetch_array($sql)) {
                                        $no++;
                                        ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $hasil['no_penjualan'] . "<br>";?></td>
                                            <td><?php echo $hasil['Kode_barang'] . "<br>";?></td>
                                            <td><?php echo $hasil['id_karyawan'] . "<br>";?></td>
                                            <td><?php echo $hasil['tgl_beli'] . "<br>";?></td>
                                            <td><?php echo $hasil['total'] . "<br>";?></td>
                                            <td><?php echo $hasil['total'] . "<br>";?></td>
                                        </tr>
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
                                        <?php
                                        }
                                        ?>

                                        <!-- <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Nomor Faktur</th>
                                            <th scope="col">Kode Produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <th scope="row">Lee Jeno Putra Jamal</th>
                                            <td>Andy Pwark</td>
                                            <td>Huang Emosian Renjun</td>
                                            <td>Mork Lee</td>
                                            <td>Nana Jaem</td>
                                            <td>Donghyuck Lee Fullsun</td>
                                            <td>Zhong Chonlooo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Choi Soobin</th>
                                            <td>Choi Yeonjun</td>
                                            <td>Choi Beomgyu</td>
                                            <td>Kang Taehyun</td>
                                            <td>Huening Kai</td>
                                            <td>Beomgyu Kibo</td>
                                            <td>Beomgyu tak punya nurani</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Prince Sunghoon</th>
                                            <td>Jake Woerrr</td>
                                            <td>Jay Woterrr</td>
                                            <td>Uri Heesung</td>
                                            <td>Leader Jungwon</td>
                                            <td>Sunoo Cipit</td>
                                            <td>Ni-ki Dance Machine</td>
                                        </tr> -->

                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button class="btn" type="button" style="margin-top: 50px; background-color: #D2B48C">
                                    <a href="proses/proses_laporan_penjualan.php" class="btn btn-sm">
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