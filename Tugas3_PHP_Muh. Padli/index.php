<?php
$mhs1 = ['nama' => 'Gibran Ghadavi', 'nim' => 'D00221001', 'nilai' => 90];
$mhs2 = ['nama' => 'Sulfatma', 'nim' => 'D00221002', 'nilai' => 70];
$mhs3 = ['nama' => 'Indra', 'nim' => 'D00221003', 'nilai' => 75];
$mhs4 = ['nama' => 'Muhammad Aditya', 'nim' => 'D00221004', 'nilai' => 85];
$mhs5 = ['nama' => 'Irwansyah', 'nim' => 'D00221005', 'nilai' => 65];
$mhs6 = ['nama' => 'Suharni', 'nim' => 'D00221006', 'nilai' => 60];
$mhs7 = ['nama' => 'Jamaluddin', 'nim' => 'D00221007', 'nilai' => 75];
$mhs8 = ['nama' => 'Ilhamuddin', 'nim' => 'D00221008', 'nilai' => 85];
$mhs9 = ['nama' => 'Resmayanti', 'nim' => 'D00221009', 'nilai' => 80];
$mhs10 = ['nama' => 'Resti Danda', 'nim' => 'D00221010', 'nilai' => 95];
$mhs11 = ['nama' => 'Masdar', 'nim' => 'D00221011', 'nilai' => 70];
$mhs12 = ['nama' => 'Asraf', 'nim' => 'D00221012', 'nilai' => 75];
$mhs13 = ['nama' => 'Ulfa Maulidia', 'nim' => 'D00221013', 'nilai' => 65];
$mhs14 = ['nama' => 'Muh. Alfin', 'nim' => 'D00221014', 'nilai' => 80];
$mhs15 = ['nama' => 'M. Darwin', 'nim' => 'D00221015', 'nilai' => 90];
$mhs16 = ['nama' => 'Qalbi Almustika', 'nim' => 'D00221016', 'nilai' => 85];
$mhs17 = ['nama' => 'Dian Novitasari', 'nim' => 'D00221017', 'nilai' => 70];

$list_mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7, $mhs8, $mhs9, $mhs10, $mhs11, $mhs12, $mhs13, $mhs14, $mhs15, $mhs16, $mhs17];

//list judul head tabel
$judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'keterangan', 'Grade', 'Predikat'];

//mencari nilai agregat
$daftar_nilai = array_column($list_mahasiswa, 'nilai');
$nilai_tertinggi = max($daftar_nilai);
$nilai_terendah = min($daftar_nilai);
$jumlah_keseluruhan_nilai = array_sum($daftar_nilai);
$jumlah_mahasiswa =  count($daftar_nilai);
$nilai_rata2 = $jumlah_keseluruhan_nilai / $jumlah_mahasiswa;

$ket= [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_keseluruhan_nilai
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP | Muh. Padli</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        h2 {
            text-align: center;
        }
        footer{
            text-align: center;
            margin-top: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: darkturquoise;
            color: white;
        }
        table thead{
            background-color: cornflowerblue;
            color: white;
        }
        table tfoot{
            background-color: cornflowerblue;
            color: white;
        }

    </style>
</head>

<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table border="1" align="center" width="80%" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <?php foreach ($judul as $key => $value):?>
                <th><?= $value ?></th>
                <?php endforeach;?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($list_mahasiswa as $value):
                //ternary untuk keterangan
                $keterangan = ($value['nilai'] >= 65)? 'Lulus' : 'Gagal'; 
                //if multikondisi untuk grade
                if($value['nilai'] >= 85 && $value['nilai'] <= 100 ) $grade = 'A';
                elseif($value['nilai'] >= 75 && $value['nilai'] < 85 ) $grade = 'B';
                elseif($value['nilai'] >= 65 && $value['nilai'] < 75 ) $grade = 'C';
                elseif($value['nilai'] >= 55 && $value['nilai'] < 65 ) $grade = 'D';
                elseif($value['nilai'] >= 0 && $value['nilai'] < 55 ) $grade = 'E';
                else '' ;
                //switch case untuk predikat
                switch($grade){
                    case 'A' :
                        $predikat = 'Memuaskan';
                        break;
                    case 'B' : 
                        $predikat = 'Bagus';
                        break;
                    case 'C':
                        $predikat = 'Cukup';
                        break;
                    case 'D':
                        $predikat = 'Kurang';
                        break;
                    case 'E' :
                        $predikat = 'Buruk';
                        break;
                    default : 
                    $predikat = '';
                    break;
                }
                //pengaturan color body
                $bg_color = ($no % 2 == 0)? "lavender" : "white";
            ?>
            <tr style="background-color: <?= $bg_color ?>;">
                <td><?= $no++ ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['nim'] ?></td>
                <td><?= $value['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <?php foreach($ket as $key => $value) {?>
                <tr>
                    <th colspan="3"><?= $key ?></th>
                    <th colspan="4"><?= $value ?></th>
                </tr>
            <?php }?>
        </tfoot>
    </table>
    <footer>&copy; Copyright by Muh.Padli </footer>
</body>

</html>
