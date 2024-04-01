<?php
include_once 'list_produk.php';
?>
<h2 align="center">Pesan Produk Sekarang!</h2>
<table align="center" width="60%">
    <tbody>
        <tr>
            <td><label for="">Nama Costumer</label></td>
            <td>:</td>
            <td><input type="text" placeholder="Masukkan nama Anda!"></td>
        </tr>
        <tr>
            <td><label for="">Pilih Produk</label></td>
            <td>:</td>
            <td>
                <select name="" id="">
                    <option value="">--Pilih Produk--</option>
                    <?php foreach($list_produk as $key => $value):?>
                        <option value="<?=$key ?>"><?= $key ?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="">Jumlah Produk</label></td>
            <td>:</td>
            <td><input type="text" placeholder="Masukkan jumlah produk!"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">Pesan Sekarang!</button></td>
        </tr>
    </tbody>
</table>
