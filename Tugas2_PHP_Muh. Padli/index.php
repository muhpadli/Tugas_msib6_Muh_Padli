<?php
if (isset($_POST['submit'])) {
    $nama_pelanggan = $_POST['pelanggan'];
    $nama_produk = $_POST['produk'];
    $jml_produk = $_POST['jumlah'];
    $harga_satuan = 0;
    switch ($nama_produk) {
        case 'TV':
            $harga_satuan = 1_700_000;
            break;
        case 'Mesin Cuci':
            $harga_satuan = 3_000_000;
            break;
        case 'Kulkas':
            $harga_satuan = 2_500_000;
            break;
        case 'AC':
            $harga_satuan = 4_000_000;
            break;
    }
    $total_belanja = $harga_satuan * $jml_produk;
    $diskon = 0.2 * $total_belanja;
    $ppn = 0.1 * ($total_belanja - $diskon);
    $harga_bersih = $total_belanja - $diskon + $ppn;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .canvas {
            border: 3px dashed #00CED1;
        }

        #table{
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-grid d-md-flex canvas mt-3">
            <div class="container bg-info pt-1 pb-3 col-md-6">
                <form action="" method="POST">
                    <h3 class="text-center mt-3 text-light">Form Belanja</h3>
                    <div class="container bg-white p-3" style="border-radius: 8px;">

                        <div class="form-group row">
                            <label for="pelanggan" class="col-4 col-form-label">Nama Pelanggan</label>
                            <div class="col-8">
                                <input id="pelanggan" name="pelanggan" placeholder="Masukkan nama pelanggan"
                                    type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produk" class="col-4 col-form-label">Produk Pilihan</label>
                            <div class="col-8">
                                <select id="produk" name="produk" class="custom-select">
                                    <option value="">--Pilihan Produk--</option>
                                    <option value="TV">TV</option>
                                    <option value="Kulkas">Kulkas</option>
                                    <option value="Mesin Cuci">Mesin Cuci</option>
                                    <option value="AC">AC</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah Produk</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Produk" type="text"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button name="reset" type="reset" class="btn btn-outline-info">Reset</button>
                                <button name="submit" type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="container-fluid m-0 p-0" id="detail_produk">
                    <h3 class="mt-3 text-center">Detail Produk</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TV</td>
                                <td>Rp. 1.700.000</td>
                            </tr>
                            <tr>
                                <td>Mesin Cuci</td>
                                <td>Rp. 3.000.000</td>
                            </tr>
                            <tr>
                                <td>Kulkas</td>
                                <td>Rp. 2.500.000</td>
                            </tr>
                            <tr>
                                <td>AC</td>
                                <td>Rp. 4.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                if(isset($_POST['submit'])){?>
                <table id="table" class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2">Faktur Belanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td><?= $nama_pelanggan ?></td>
                        </tr>
                        <tr>
                            <td>Produk Pilihan</td>
                            <td><?= $nama_produk ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Beli</td>
                            <td><?= $jml_produk ?></td>
                        </tr>
                        <tr>
                            <td>Harga Satuan</td>
                            <td>Rp. <?= $harga_satuan ?></td>
                        </tr>
                        <tr>
                            <td>Total Belanja</td>
                            <td>Rp. <?= $total_belanja?></td>
                        </tr>
                        <tr>
                            <td>Potongan Diskon</td>
                            <td>Rp. <?= $diskon?></td>
                        </tr>
                        <tr>
                            <td>PPN</td>
                            <td>Rp. <?= $ppn?></td>
                        </tr>
                        <tr>
                            <td>Harga Bersih</td>
                            <td>Rp. <?= $harga_bersih?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-center">Selamat Belanja di Toko Kami!</th>
                        </tr>
                    </tfoot>
                </table>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
