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
                require "sidebar.php";
                ?>
                <!-- END SIDEBAR -->
            </div>

            <div class="col-lg-9" style="background-color: #FFEBCD;">
                <!-- start content -->
                <h1 class="ms-0" style="text-align: center;">CASHIER</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Kode Item</label>
                                            <input type="text" id="disabledTextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="Select" class="form-label">Nama Item</label>
                                            <select id="dSelect" class="form-select border-0" style="background-color: #F5F5DC;">
                                                <option>Select Menu</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3" style="text-align: center;">
                                            <label for="TextInput" class="form-label">@</label>
                                            <input type="text" id="TextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="disabledTextInput" class="form-label">Harga Satuan</label>
                                            <input type="text" id="disabledTextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
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
                                            <th scope="col">Item</th>
                                            <th scope="col">@</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td></td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="TextInput" class="form-label" style="text-align: center;">Total</label>
                                            <input type="text" id="TextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="TextInput" class="form-label" style="text-align: center;">Kembalian</label>
                                            <input type="text" id="TextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <form>
                                    <fieldset disabled>
                                        <div class="mb-3">
                                            <label for="TextInput" class="form-label" style="text-align: center;">Bayar</label>
                                            <input type="text" id="TextInput" class="form-control border-0" placeholder="" style="background-color: #F5F5DC;">
                                        </div>
                                    </fieldset>
                                </form>
                                <button class="btn" style="background-color: #D2B48C;;" type="button">Cetak</button>
                                <button class="btn" style="background-color: #D2B48C;;" type="button">Kembali</button>
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