<div class="col-lg-12">
 <div class="panel panel-primary">
 <div class="panel-heading">
</div>
<div class="panel-body">
  <?php 
  echo validation_errors('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
  if (isset($error_upload)) {
  	echo '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
  }
   echo form_open_multipart('guru/edit/'.$guru->id_guru);

   ?>
 <div class="container">
  <div class="row">
<div class="col-md-6">
<div class="form-group">
<label>NIP</label>
<input class="form-control" name="nip" value="<?=$guru->nip?>" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Password</label>
<input class="form-control" name="password" id="myInput" value="<?= $guru->password?>" type="password" required=""><input type="checkbox" onclick="myFunction()">&nbsp;Lihat Password  <br>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Nama Guru</label>
<input class="form-control" name="nama_guru" value="<?=$guru->nama_guru?>" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tempat Lahir</label>
<input class="form-control" name="tempat_lahir" value="<?=$guru->tempat_lahir?>" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Tanggal Lahir</label>
<input class="form-control" name="tgl_lahir" value="<?=$guru->tgl_lahir?>" type="date" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Mata Pelajaran</label>
<select name="id_mapel" class="form-control">
<option value="<?=$guru->id_mapel?>"><?=$guru->nama_mapel?></option>
<?php foreach ($mapel as $key => $data) {?>
<option value="<?=$data->id_mapel?>"><?=$data->nama_mapel?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Pendidikan</label>
<input class="form-control" name="pendidikan" value="<?=$guru->pendidikan?>" type="text" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<img src="<?= base_url('foto_guru/'.$guru->foto_guru)?>" width="250px" alt="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Ganti Foto</label>
<input class="form-control" name="foto_guru"  type="file">
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