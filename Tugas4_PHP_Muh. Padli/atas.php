<?php
include_once 'webmenu.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website | Muh. padli</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        input {
            width: 400px;
            padding: 9px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }

        textarea{
            width: 400px;
            padding: 9px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }

        button{
            border: none;
            background-color: darkcyan;
            color: aliceblue;
            padding: 12px;
            border-radius: 4px;
        }

        select{
            width: 400px;
            padding: 9px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 2px solid black;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1 align="center">CV. MP-Electronic</h1>
    <div class="menu" style="text-align: center; background-color: darkcyan; color:blue">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
        foreach ($menu_atas as $key => $value) {
            // echo $key. $value <br>;
            echo "<a href='index.php?hal=$key' >$value</a>";
        }
        ?>
    </div>
