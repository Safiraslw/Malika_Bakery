<?php
//require "../laporan_masuk.php";
echo "<h2>Laporan Laba</h2>";
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
$sql = mysqli_query($conn, "SELECT * FROM neraca");

?>

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

                                    </tbody>
                                </table>
<?php
echo "<script> window.location = '../report.php'; </script>"; 
?>


