<?php
$nama = "Muh. Padli";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <div class="container p-0" id="header">
        <div class="row  align-items-center" style="height: 90vh;">
            <div class="col-md-9" style="padding-left: 25px;">
                <h2>Biodata Diri</h2>
                <table>
                    <tbody>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td><?= $nama?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                <img src="./img/unsulbar.jpg" alt="Logo unsulbar">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
