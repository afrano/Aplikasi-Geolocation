<?php echo $judul; ?> 
<?php echo anchor('barang/input', 'INPUT DATA BARANG'); ?>
<hr>
<table border="1">
    <tr><th>Kode Barang</th><th>Nama Barang</th><th>Harga</th><th colspan="2"></th></tr>

    <?php
    foreach ($barang as $b) { 
        echo "<tr>"
        . "<td>$b->kode_barang</td>"
        . "<td>$b->nama_barang</td>"
        . "<td>$b->harga</td> "
        . "<td>" . anchor('barang/edit/' . $b->kode_barang, 'EDIT') . "</td>"
        . "<td>" . anchor('barang/delet/' . $b->kode_barang, 'DELETE') . "</td></tr>";
    }
    ?>
    
</table>



