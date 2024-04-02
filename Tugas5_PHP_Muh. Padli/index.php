<?php
$kuliah = [
    'kuliah_1' => 'Universitas Sulawesi Barat',
    'kuliah_2' => 'Universitas Hasanuddin',
    'kuliah_3' => 'Universitas Tadulako',
    'kuliah_4' => 'Universitas Muhammadiyyah Makassar',
    'kuliah_5' => 'Universitas Jember',
    'kuliah_6' => 'Amikom Yogyakarta',
];

$matkul =[
    'matkul_1' => 'UI/UX',
    'matkul_2' => 'Permorograman WEB',
    'matkul_3' => 'Database',
    'matkul_4' => 'Data Mining',
    'matkul_5' => 'Data Science',
    'matkul_6' => 'ُPBO'
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="objMahasiswa.php" method="post">
            <div class="row mt-3 text-center">
                <h1 class="col-md-10 ">Form Nilai Ujian</h1>
                <div class="col-md-2">Form <br> Halaman Ke-1</div>
                <hr>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">kuliah</label>
                <div class="col-sm-10">
                    <select name="kuliah" class="form-select" id="">
                        <option value="">--Pilih Universitas--</option>
                        <?php
                        foreach($kuliah as $value):?>
                         <option value="<?= $value ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                    <select name="matkul" class="form-select" id="">
                        <option value="">--Pilih Mata Kuliah--</option>
                        <?php
                        foreach($matkul as $value):?>
                         <option value="<?= $value ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Nilai</label>
                <div class="col-sm-10">
                    <input type="text" name="nilai" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
