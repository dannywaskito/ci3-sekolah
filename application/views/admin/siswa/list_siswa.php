<div class="container-fluid">
<a href="<?= base_url('siswa/add');?>" class="btn btn-success"><i class="fa fa-user"></i> Tambah Data Siswa</a><br><br>
  <div class="siswa" data-flashdata="<?=$this->session->flashdata('siswa');?>"></div>
  <?php 
 if ($this->session->flashdata('siswa'))?>
   <div class="table-responsive">
<table id="table" class="table table-bordered table-striped" width="100%">
               <thead>
                   <tr>
                         <th class="text-center">No</th>
                         <th class="text-center">Nis</th>
                         <th class="text-center">Password</th>
                         <th class="text-center">Nama Siswa</th>
                         <th class="text-center">Tempat Lahir</th>
                         <th class="text-center">Tanggal Lahir</th>
                         <th class="text-center">Kelas</th>
                         <th class="text-center">Jurusan</th>
                     <!--     <th class="text-center">Jurusan</th> -->
                         <th class="text-center">Foto Siswa</th>
                         <th>Aksi</th>
                   </tr>
               </thead>
               <tbody>
               <?php $no=0; foreach ($siswa as $key => $data) {$no++ ;?> 
                   <tr>
                       <td class="text-center"><?= $no?></td>
                       <td class="text-center"><?= $data->nis ?></td>
                       <td class="text-center"><?= $data->password ?></td>
                       <td class="text-center"><?= $data->nama_siswa ?></td>
                       <td class="text-center"><?= $data->tempat_lahir ?></td>
                       <td class="text-center"><?= date('d m Y', strtotime($data->tgl_lahir)); ?></td>
                       <td class="text-center"><?= $data->kelas ?></td>
                       <td class="text-center"><?= $data->nama_jurusan ?></td>
                   <!--     <td class="text-center"><?= $data->jurusan ?></td> -->
                       <td class="text-center"><img src="<?= base_url('foto_siswa/'.$data->foto_siswa)?>" width="150px"></td>
                       
               <td>
            <a href="<?php echo base_url('siswa/edit/'.$data->id_siswa) ?>"class="badge badge-primary btn-sm"> <i class="fa fa-edit fa-fw"></i>Edit</a>
            <a href="<?php echo base_url('siswa/delete/'.$data->id_siswa) ?>"  class="badge badge-danger btn-sm tombol-delete"> <i class="fa fa-trash fa-fw"></i>Hapus</a>
             </td>
                   </tr>
               <?php } ?> 
               </tbody>
           </table>
</div>
</div>
  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.slim.min.js"></script>
