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
$sql = mysqli_query($conn, "SELECT * FROM tb_buku");

?>

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
<?php
echo "<script> window.location = '../report.php'; </script>"; 
?>


