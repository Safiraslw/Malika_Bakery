<?php
//require "../laporan_masuk.php";
echo "<h2>Laporan Barang Masuk</h2>";
echo "<script> window.print() </script>";

// $start = $_POST['inputmulai'];
// $end = $_POST['inputsampai'];

// $sql = mysqli_query($conn, "SELECT * FROM tb_barang BETWEEN tgl_masuk='$start' AND tgl_masuk='$end'");
// if($sql) {
//     echo "<script> window.print() </script>";
//     echo "<script> window.location = '../report.php'; </script>"; 
// }
// else {
//     echo "<script> alert('Maaf, Report gagal menampilkan laporan.'); </script>";
//     echo "<script> window.location = '../laporan_masuk.php'; </script>"; 
// }
require "koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM penjualan");

?>

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

                                    </tbody>
                                </table>
<?php
echo "<script> window.location = '../report.php'; </script>"; 
?>


