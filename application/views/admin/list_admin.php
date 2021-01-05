<div class="container-fluid">
<button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-book"></i> Tambah Admin</button> <br><br>
  <div class="admin" data-flashdata="<?=$this->session->flashdata('admin');?>"></div>
  <?php 
 if ($this->session->flashdata('admin'))?>
   <div class="table-responsive">
<table id="table" class="table table-bordered table-striped" width="100%">
               <thead>
                   <tr>
                         <th class="text-center">No</th>
                         <th>Nama Lengkap</th>
                         <th>Username</th>
                         <th>Password</th>
                         <th class="text-center">Aksi</th>
                   </tr>
               </thead>
               <tbody>
               <?php $no=0; foreach ($admin as $key => $data) {$no++ ;?> 
                   <tr>
                       <td class="text-center"><?= $no?></td>
                       <td><?= $data->nama_user ?></td>
                       <td><?= $data->username ?></td>
                       <td><?= $data->password ?></td>
                       <td class="text-center">
          <button class="badge badge-primary btn-sm" data-toggle="modal" data-target="#editModal<?= $data->id_user ?>"> <i class="fa fa-edit fa-fw"></i> Edit</button>
             <a href="<?php echo base_url('admin/delete/'.$data->id_user) ?>"class="badge badge-danger btn-sm tombol-hpss"> <i class="fa fa-trash fa-fw"></i> Hapus</a>
             </td>
                   </tr>
               <?php } ?> 
               </tbody>
           </table>
</div>
<!-- Modal Tambah Mapel -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                 <?php echo form_open ('admin/add');?>
               <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input class="form-control" name="nama_user" type="text" required="">
                       </div>
                        <div class="form-group">
                  <label>Username</label>
                    <input class="form-control" name="username" type="text">
                       </div>
                        <div class="form-group">
                  <label>Password</label>
                    <input class="form-control" name="password" type="password" id="myInput"required>
                    <input type="checkbox" onclick="myFunction()">&nbsp;Lihat Password  <br><br>
                       </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>  Simpan</button>
              </div>
              <?php echo form_close(); ?>
          </div>
                                            <!-- /.modal-content -->
      </div>
                                        <!-- /.modal-dialog -->
  </div>
                                    <!-- /.modal -->
<!-- Modal Edit Mapel -->
<?php foreach ($admin as $key => $data) {?> 
  <div class="modal fade" id="editModal<?= $data->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                 <?php echo form_open ('admin/edit/'.$data->id_user);?>
               <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input class="form-control" name="nama_user" value="<?=$data->nama_user?>" type="text">
                       </div>
                       <div class="form-group">
                  <label>Username</label>
                    <input class="form-control" name="username" value="<?=$data->username?>" type="text">
                       </div>
                    <div class="form-group">
                  <label>Password</label>
                    <input class="form-control" name="password" value="<?=$data->password?>" type="password"  id="myInput1">
                    <input type="checkbox" onclick="myFunction1()">&nbsp;Lihat Password  <br>
                       </div>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Batal</button>
                  <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i>  Simpan</button>
              </div>
              <?php echo form_close(); ?>
          </div>
                                            <!-- /.modal-content -->
      </div>
                                        <!-- /.modal-dialog -->
  </div> -->
                                    <!-- /.modal -->
<?php } ?>
<!-- Script Show Hide Password -->
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>