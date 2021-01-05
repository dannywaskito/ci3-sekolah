<div class="col-lg-12">
 <div class="panel panel-primary">
 <div class="panel-heading">
</div>
<div class="panel-body">
  <?php 
  if (isset($error_upload)) {
    echo $error_upload;
  }
   echo form_open_multipart('siswa/add');

   ?>
<div class="container">
  <div class="row">
<div class="col-md-6">
<div class="form-group">
<label>NIS</label>
<input class="form-control" name="nis" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Password</label>
<input class="form-control" name="password" id="myInput" type="password" required="">
<input type="checkbox" onclick="myFunction()">&nbsp;Lihat Password  <br>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Nama Siswa</label>
<input class="form-control" name="nama_siswa" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tempat Lahir</label>
<input class="form-control" name="tempat_lahir" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tanggal Lahir</label>
<input class="form-control" name="tgl_lahir" type="date" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Kelas</label>
<select name="kelas" class="form-control">
<option value="">--Pilih Kelas--</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Jurusan</label>
<select name="id_jurusan" class="form-control">
<option>--Pilih Jurusan--</option>
<?php foreach ($jurusan as $key => $data) {?>
<option value="<?=$data->id_jurusan?>"><?=$data->nama_jurusan?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Foto Siswa</label>
<input class="form-control" name="foto_siswa" type="file" required="">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
  <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Simpan</button>
  <button class="btn btn-danger" type="reset">Reset</button>
  </div>
</div>
</div>
</div>
</div>
<?php echo form_close() ?>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>