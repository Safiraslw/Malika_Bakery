<?php
//require "../laporan_masuk.php";
echo "<img src='../images/cute.png'>";
echo "<center class='text-xl-start'>MALIKA BAKERY</center>";
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

?>

<table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>
                                        <tr>
                                            <td scope="col">Nomor Struk</td>
                                            <td scope="col">0000 0001</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td scope="row">Tanggal</td>
                                            <td><?php echo date('d-m-Y'); ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Kasir</td>
                                            <td>Anisa Safira</td>
                                        </tr>
                                        <br><br><br>
                                        <tr>
                                            <td scope="row">No.</td>
                                            <td>Nama Item</td>
                                            <td>Jumlah</td>
                                            <td>Harga</td>
                                            <td>Total</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Cokelat Keju</td>
                                            <td>2</td>
                                            <td>5.000</td>
                                            <td>10.000</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Item :</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">Total Bayar</td>
                                            <td>20.000</td>
                                        </tr>
                                    </tbody>
                                </table>
<?php
echo "<script> window.location = '../report.php'; </script>"; 
?>


