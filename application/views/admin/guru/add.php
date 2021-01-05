<div class="col-lg-12">
 <div class="panel panel-primary">
 <div class="panel-heading">
</div>
<div class="panel-body">
  <?php 
  if (isset($error_upload)) {
  	echo $error_upload;
  }
   echo form_open_multipart('guru/add');

   ?>
<div class="container">
  <div class="row">
<div class="col-md-6">
<div class="form-group">
<label>NIP</label>
<input class="form-control" name="nip" type="text" required="">
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
<label>Nama Guru</label>
<input class="form-control" name="nama_guru" type="text" required="">
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
<label>Mata Pelajaran</label>
<select name="id_mapel" class="form-control">
<option value="">--Pilih Mata Pelajaran--</option>
<?php foreach ($mapel as $key => $data) {?>
<option value="<?=$data->id_mapel?>"><?=$data->nama_mapel?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Pendidikan</label>
<input class="form-control" name="pendidikan" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Foto Guru</label>
<input class="form-control" name="foto_guru" type="file" required="">
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
  <button class="btn btn-success" type="submit"><i class="fas fa-check"></i> Simpan</button>
  <button class="btn btn-danger" type="reset">Reset</button>
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