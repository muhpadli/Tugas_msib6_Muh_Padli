<?php
require_once 'Mahasiswa.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar nilai ujian Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-3 row text-center">
            <h1 class="col-md-10">Daftar Nilai Ujian Mahasiswa</h1>
            <div class="col-md-2">Form <br> Halaman Ke-2</div>
        </div>
        <div class="row mt-3">
            <div class="col-md-2">
                <a href="index.php" class="btn btn-primary"><- Kembali</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>kuliah</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                            <th>Grade</th>
                            <th>Predikat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_POST['submit'])) {
                            $nim = $_POST['nim'];
                            $nama = $_POST['nama'];
                            $kuliah = $_POST['kuliah'];
                            $matkul = $_POST['matkul'];
                            $nilai = $_POST['nilai'];
                        
                            $ns1 = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);
                        
                        ?>
                        <tr>
                            <td><?= $ns1->nim?></td>
                            <td><?= $ns1->nama ?></td>
                            <td><?= $ns1->kuliah ?></td>
                            <td><?= $ns1->matkul ?></td>
                            <td><?= $ns1->nilai ?></td>
                            <td><?= $ns1->getGrade() ?></td>
                            <td><?= $ns1->getPredikat() ?></td>
                            <td><?= $ns1->getStatus() ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
