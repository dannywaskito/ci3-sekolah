 
<div class="col-md-12">
		<div class="alert alert-success alert-dismissible">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
   </button>
   <h3>Hallo Selamat Datang Kembali, <b><?php echo $this->session->userdata('username');?></b></h3>
   </div>
   <div class="row">
   <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Siswa</div>
                      <h4><?php $this->model_jumlah->get_siswa(); ?> Siswa</h4>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                    </div>

                  </div>
                  <a href="<?= base_url('siswa')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
</div>
       <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Jurusan</div>
                      <h4><?php $this->model_jumlah->get_jurusan(); ?> Jurusan</h4>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>

                  </div>
                  <a href="<?= base_url('jurusan')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
</div>
  <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Guru</div>
                      <h4><?php $this->model_jumlah->get_guru(); ?> Guru</h4>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>

                  </div>
                  <a href="<?= base_url('guru')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Mata Pelajaran</div>
                      <h4><?php $this->model_jumlah->get_mapel(); ?> Mapel</h4>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </div>

                  </div>
                  <a href="<?= base_url('mapel')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Admin</div>
                      <h4><?php $this->model_jumlah->get_admin(); ?> Admin</h4>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>

                  </div>
                  <a href="<?= base_url('admin/list_admin')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>