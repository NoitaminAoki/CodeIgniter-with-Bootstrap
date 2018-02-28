<h1 style="text-align:center">Ubah Penduduk</h1>

 <div class="row">
    <form class="col s12" action="http://localhost/EPenduduk/index.php/Penduduk/updatePenduduk" method="post">
      
      <div class="row">
        <div class="input-field col s3">
          <input id="nik" name="nik" type="number" class="validate" value="<?php echo $penduduk->nik ?>" required>
          <label for="nik" data-error="Number Only!" min="1">NIK</label>
        </div>
        <div class="input-field col s9">
          <input id="nama" name="nama" type="text" value="<?php echo $penduduk->nama ?>" class="validate" required>
          <label for="nama">Nama</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="tempat_lahir" name="tempat_lahir" value="<?php echo $penduduk->tempat_lahir ?>" type="text" class="validate">
          <label for="tempat_lahir">Tempat Lahir</label>
        </div>
        <div class="input-field col s6">
          <input id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $penduduk->tanggal_lahir ?>" placeholder="" type="text" class="datepicker">
          <label for="tanggal_lahir">Tanggal Lahir</label>
        </div>
      </div>

	  <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat" name="alamat" class="materialize-textarea validate"><?php echo $penduduk->alamat ?></textarea>
          <label for="alamat">Alamat</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
    		<select id="jenis_kelamin" name="jenis_kelamin" class="validate">
      			<option value="" disabled selected>Jenis Kelamin</option>
      			<?php if ($penduduk->jenis_kelamin == "Laki-Laki") { ?>
            <option value="Laki-Laki" selected>Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
            <?php }else { ?>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan" selected>Perempuan</option>
            <?php } ?>
    		</select>
    	<label>Jenis Kelamin</label>
  		</div>
        <div class="input-field col s6">
    		<select id="gol_darah" name="gol_darah" class="validate">
      			<option value="" disabled selected>Golongan Darah</option>
      			<?php if ($penduduk->gol_darah == "a") { ?>
            <option value="a" selected>A</option>
      			<option value="b">B</option>
      			<option value="ab">AB</option>
      			<option value="o">O</option>
            <?php } elseif ($penduduk->gol_darah == "b") { ?>
            <option value="a">A</option>
            <option value="b" selected>B</option>
            <option value="ab">AB</option>
            <option value="o">O</option>
            <?php } elseif ($penduduk->gol_darah == "ab") { ?>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="ab" selected>AB</option>
            <option value="o">O</option>
            <?php } else { ?>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="ab">AB</option>
            <option value="o" selected>O</option>  
            <?php } ?>
    		</select>
    	<label>Golongan Darah</label>
  		</div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="agama" type="text" name="agama" value="<?php echo $penduduk->tanggal_lahir ?>" class="validate" required>
          <label for="agama">Agama</label>
        </div>
        <div class="input-field col s6">
          <input id="status" type="text" name="status" value="<?php echo $penduduk->status ?>" class="validate" required>
          <label for="status">Status</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="pekerjaan" type="text" name="pekerjaan" value="<?php echo $penduduk->pekerjaan ?>" class="validate" required>
          <label for="pekerjaan">Pekerjaan</label>
        </div>
        <div class="input-field col s6">
          <input id="kewarganegaraan" name="kewarganegaraan" type="text" class="validate" value="<?php echo $penduduk->kewarganegaraan ?>" required>
          <label for="kewarganegaraan">Kewarganegaraan</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="foto_ktp" name="foto_ktp" type="text" value="<?php echo $penduduk->foto_ktp ?>" class="validate" required>
          <label for="foto_ktp">Foto Ktp</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" value="<?php echo $penduduk->password ?>" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
      <div class="col s12"><button type="submit" name="Tambah" class="btn waves-light waves-effect right">Simpan</button>
      </div>
      </div>

    </form>
  </div>

