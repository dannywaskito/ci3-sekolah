<div class="container-fluid">
<a href="<?= base_url('guru/add');?>" class="btn btn-success"><i class="fa fa-user"></i> Tambah Data Guru</a><br><br>
  <div class="flash-data" data-flashdata="<?=$this->session->flashdata('pesan');?>"></div>
  <?php 
 if ($this->session->flashdata('pesan'))?>
   <div class="table-responsive">
<table id="table" class="table table-bordered table-striped" width="100%">
               <thead>
                   <tr>
                         <th class="text-center">No</th>
                         <th class="text-center">NIP</th>
                         <th class="text-center">Password</th>
                         <th class="text-center">Nama Guru</th>
                         <th class="text-center">Tempat Lahir</th>
                         <th class="text-center">Tanggal Lahir</th>
                         <th class="text-center">Guru Mapel</th>
                         <th class="text-center">Pendidikan</th>
                         <th class="text-center">Foto</th>
                         <th>Aksi</th>
                   </tr>
               </thead>
               <tbody>
               <?php $no=0; foreach ($guru as $key => $data) {$no++ ;?> 
                   <tr>
                       <td class="text-center"><?= $no?></td>
                       <td class="text-center"><?= $data->nip ?></td>
                       <td class="text-center"><?= $data->password ?></td>
                       <td class="text-center"><?= $data->nama_guru ?></td>
                       <td class="text-center"><?= $data->tempat_lahir ?></td>
                       <td class="text-center"><?= date('d m Y', strtotime($data->tgl_lahir)); ?></td>
                       <td class="text-center"><?= $data->nama_mapel ?></td>
                       <td class="text-center"><?= $data->pendidikan ?></td>
                       <td class="text-center"><img src="<?= base_url('foto_guru/'.$data->foto_guru)?>" width="150px"></td>
               <td>
            <a href="<?php echo base_url('guru/edit/'.$data->id_guru) ?>"class="badge badge-primary btn-sm"> <i class="fa fa-edit fa-fw"></i>Edit</a>
            <a href="<?php echo base_url('guru/delete/'.$data->id_guru) ?>"  class="badge badge-danger btn-sm tombol-hapus"> <i class="fa fa-trash fa-fw"></i>Hapus</a>
             </td>
                   </tr>
               <?php } ?> 
               </tbody>
           </table>
</div>
</div>
  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
