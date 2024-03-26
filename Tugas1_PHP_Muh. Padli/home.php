<?php
$nama = "Muh. Padli";
$nim  = "D0221513";
$umur = 21;
$jenis_kelamin = "Laki-laki";
$email = "muhp5934@gmail.com";
$noHp = "083870631725";
$alamat = "Majene";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    th{
        width: 200px;
    }
</style>
<body>
    <div class="container p-0" id="header">
        <div class="row  align-items-center" style="height: 90vh;">
            <div class="col-md-9" style="padding-left: 25px;">
                <h2>Biodata Diri</h2>
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td><?= $nama?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td><?= $nim?></td>
                        </tr>
                        <tr>
                            <th>Umur</th>
                            <td><?= $umur?></td>
                        </tr>
                        <tr>
                            <th>Jenis kelamin</th>
                            <td><?= $jenis_kelamin?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $email?></td>
                        </tr>
                        <tr>
                            <th>No Handphone</th>
                            <td><?= $noHp?></td>
                        </tr>
                        <tr>
                            <th>alamat</th>
                            <td><?= $alamat?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <figure>
                <img src="./img/myFoto.jpeg" style="height: 250px; width:200px; border-radius: 50%;" alt="Logo unsulbar">
                <figcaption >Foto Profile</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
