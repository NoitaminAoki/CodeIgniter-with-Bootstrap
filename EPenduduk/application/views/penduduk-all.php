<div class="row">
<a class="btn waves-light waves-effect" style="margin-top:10px;" href="http://localhost/EPenduduk/index.php/penduduk/tambahPenduduk">Tambah</a>
<button id="tampil_data1" data-target="modal2" class="btn modal-trigger">Tambah with Modal</button>
  
</div>

<div id="DataPenduduk" class="row" style="margin-top:10px;">
<table class="bordered centered striped">
    <thead>
      <th>No. </th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>Foto</th>
      <th>Detail</th>  
      <th>Edit</th>
      <th>Delete</th>
    </thead>
    <?php 

    $no_Urut = 1;
    foreach ($penduduk as $key) { ?>
    <tbody>
      <tr>
        <td><?php echo $no_Urut++ ?></td>
        <td><?php echo $key->nik ?></td>
        <td><?php echo $key->nama ?></td>
        <td><?php echo $key->tanggal_lahir ?></td>
        <td><?php echo $key->alamat ?></td>
        <td> <button id="tampil_ktp" onclick="tampilkanFoto('<?php echo $key->foto_ktp ?>')" data-target="modal3" class="btn modal-trigger">View</button></td>
        <td><button id="tampil_data" onclick="tampilkanDetail('<?php echo $key->nik ?>','<?php echo $key->nama ?>','<?php echo $key->tempat_lahir ?>')" data-target="modal1" class="btn modal-trigger">view</button></td>
        <td><a href="http://localhost/EPenduduk/index.php/Penduduk/editPenduduk/<?php echo $key->nik ?>" class="btn waves-light waves-effect">Edit</td>
        <td><a onclick="return confirm('Ingin menghapus data?')" href="http://localhost/EPenduduk/index.php/Penduduk/hapusPenduduk/<?php echo $key->nik ?>" class="btn waves-light waves-effect">Delete</a></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>