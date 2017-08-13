<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>
<th>No</th>
                      <th>Pangkalan</th>
                      <th>No. Reg</th>
                      <th>Nama Pemilik</th>
                      <th>Ktp</th>
					  <th>Jml Tabung</th>
                      <th>Kategori</th>
					  <th>Alamat</th>
                      <th>Telp</th>
                      <th>Latitude</th>
                      <th>Longitude</th>
                      
 </tr>

</thead>

<tbody>

 <?php $no=1; foreach($l->result() as $r){ ?>
             <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->pangkalan ?></td>
                      <td><?=$r->no_reg ?></td>
                      <td><?=$r->nama ?></td>
					  <td><?=$r->ktp ?></td>
					  <td><?=$r->jml_tabung ?></td>
                      <td><?=$r->kategori ?></td>
					  <td><?=$r->alamat ?></td>
                      <td><?=$r->telp ?></td>
                      <td><?=$r->latittude ?></td>
                      <td><?=$r->longitude ?></td
 </tr>

<?php $no++; } ?>

</tbody>

</table>