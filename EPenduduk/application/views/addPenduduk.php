<h1 style="text-align:center">Tambah Penduduk</h1>

 <div class="row">
    <form class="col s12" action="http://localhost/EPenduduk/index.php/Penduduk/savePenduduk" method="post" onsubmit="return confirm('Buat Data?')" enctype="multipart/form-data">
      
      <div class="row">
        <div class="input-field col s3">
          <input id="nik" name="nik" type="number" class="validate" required>
          <label for="nik" data-error="Number Only!" min="1">NIK</label>
        </div>
        <div class="input-field col s9">
          <input id="nama" name="nama" type="text" class="validate" required>
          <label for="nama">Nama</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="tempat_lahir" name="tempat_lahir" type="text" class="validate">
          <label for="tempat_lahir">Tempat Lahir</label>
        </div>
        <div class="input-field col s6">
          <input id="tanggal_lahir" name="tanggal_lahir" placeholder="" type="text" class="datepicker">
          <label for="tanggal_lahir">Tanggal Lahir</label>
        </div>
      </div>

	  <div class="row">
        <div class="input-field col s12">
          <textarea id="alamat" name="alamat" class="materialize-textarea validate"></textarea>
          <label for="alamat">Alamat</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
    		<select id="jenis_kelamin" name="jenis_kelamin" class="validate">
      			<option value="" disabled selected>Jenis Kelamin</option>
      			<option value="Laki-Laki">Laki-Laki</option>
      			<option value="Perempuan">Perempuan</option>
    		</select>
    	<label>Jenis Kelamin</label>
  		</div>
        <div class="input-field col s6">
    		<select id="gol_darah" name="gol_darah" class="validate">
      			<option value="" disabled selected>Golongan Darah</option>
      			<option value="a">A</option>
      			<option value="b">B</option>
      			<option value="ab">AB</option>
      			<option value="o">O</option>
    		</select>
    	<label>Golongan Darah</label>
  		</div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="agama" type="text" name="agama" class="validate" required>
          <label for="agama">Agama</label>
        </div>
        <div class="input-field col s6">
          <input id="status" type="text" name="status" class="validate" required>
          <label for="status">Status</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input id="pekerjaan" type="text" name="pekerjaan" class="validate" required>
          <label for="pekerjaan">Pekerjaan</label>
        </div>
        <div class="input-field col s6">
          <input id="kewarganegaraan" name="kewarganegaraan" type="text" class="validate" required>
          <label for="kewarganegaraan">Kewarganegaraan</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <div class="file-field input-field">
      <div class="btn">
        <span>Foto KTP</span>
        <input type="file" name="foto_ktp" accept="image/*">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="nama_foto" type="text"  placeholder="Pilih foto ktp">
      </div>
    </div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row">
      <div class="col s12"><button type="submit" name="Tambah" class="btn waves-light waves-effect right">Simpan</button>
      </div>
      </div>

    </form>
  </div>