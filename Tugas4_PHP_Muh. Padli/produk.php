<?php
include_once 'list_produk.php';
?>
<h2 align="center">Produk</h2>
<div class="list-produk">
    <table border="1" align="center" cellpadding="15px" cellspacing="0" width="80%">
        <thead style="background-color: cadetblue;">
            <tr>
                <th style="width: 50px;">No</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($list_produk as $key => $value):?>
            <tr>
                <td style="width: 50px;">
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $key ?>
                </td>
                <td>
                    <?= $value ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
</div>
