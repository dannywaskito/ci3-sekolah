<div class="container-fluid">
<button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-book"></i> Tambah Mata Pelajaran</button> <br><br>
  <div class="mapel" data-flashdata="<?=$this->session->flashdata('mapel');?>"></div>
  <?php 
 if ($this->session->flashdata('mapel'))?>
   <div class="table-responsive">
<table id="table" class="table table-bordered table-striped" width="100%">
               <thead>
                   <tr>
                         <th class="text-center">No</th>
                         <th>Kode Mata Pelajaran</th>
                         <th>Mata Pelajaran</th>
                         <th class="text-center">Aksi</th>
                   </tr>
               </thead>
               <tbody>
               <?php $no=0; foreach ($mapel as $key => $data) {$no++ ;?> 
                   <tr>
                       <td class="text-center"><?= $no?></td>
                       <td><?= $data->kode_mapel ?></td>
                       <td><?= $data->nama_mapel ?></td>
                       <td class="text-center">
             <button class="badge badge-primary btn-sm" data-toggle="modal" data-target="#editModal<?= $data->id_mapel ?>"> <i class="fa fa-edit fa-fw"></i> Edit</button>
             <a href="<?php echo base_url('mapel/delete/'.$data->id_mapel) ?>"class="badge badge-danger btn-sm tombol-del"> <i class="fa fa-trash fa-fw"></i> Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Pelajaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                 <?php echo form_open ('mapel/add');?>
               <div class="form-group">
                  <label>Kode Mata Pelajaran</label>
                    <input class="form-control" name="kode_mapel" type="text" required>
                       </div>
                        <div class="form-group">
                  <label>Nama Mata Pelajaran</label>
                    <input class="form-control" name="nama_mapel" type="text" required>
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
<?php foreach ($mapel as $key => $data) {?> 
  <div class="modal fade" id="editModal<?= $data->id_mapel ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Jurusan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
              <div class="modal-body">
                 <?php echo form_open ('mapel/edit/'.$data->id_mapel);?>
               <div class="form-group">
                  <label>Kode Mata Pelajaran</label>
                    <input class="form-control" name="kode_mapel" value="<?=$data->kode_mapel?>" type="text">
                       </div>
                        <div class="form-group">
                  <label>Nama Mata Pelajaran</label>
                    <input class="form-control" name="nama_mapel" value="<?=$data->nama_mapel?>" type="text">
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
<?php } ?>