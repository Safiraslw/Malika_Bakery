<?php
include "proses/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
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
                <h1 class="ms-0" style="text-align: center;">KARYAWAN</h1>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset>
                                        <div class="mb-3">
                                            <input type="text" id="TextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <button class="btn" style="background-color: #D2B48C;" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search me-2" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>Cari
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <table class="table border-0" style="background-color: #F5F5DC;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Karyawan</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Posisi</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">No. Telepon</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 0;
                                        while($data = mysqli_fetch_array($sql)) {
                                            $no++;
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $no; ?></th>
                                            <td><?php echo $data['nim'] . "<br>";?></td>
                                            <td><?php echo $data['nama'] . "<br>";?></td>
                                            <td><?php echo $data['kelas'] . "<br>";?></td>
                                            <td><?php echo $data['prodi'] . "<br>";?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
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
                                        <button class="btn" type="button" style="background-color: #D2B48C;">Kembali</button>
                                        <a href="tambah_karyawan.php" class="btn link-dark" style="background-color: #D2B48C;">Edit</a>
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