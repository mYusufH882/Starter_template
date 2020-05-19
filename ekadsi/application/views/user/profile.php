<!-- .site-wrap -->
  <div class="site-wrap">
   
    <?php $this->load->view('_partials/navbar'); ?>
    <?php $this->load->view('_partials/banner'); ?>
    
    <div class="site-section">
      <div class="container">
          <div class="row">
            <div class="col-lg-8 mb-5">
              <div class="card mb-5">
                <div class="card-body">
                  <h3 class="card-title text-black">Deskripsi Diri</h3>
                  <p><?= $user->description; ?></p>
                </div>
                </div>
                <div class="card text-black bg-light">
                  <div class="card-body">
                    <h5 class="card-title">Kelas yang diikuti</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a class="btn btn-primary" href="<?= base_url('kelassaya'); ?>">Lihat Kelas</a>
                  </div>
                </div>
            </div>
            
            <div class="col-lg-4 pl-lg-5">
              <div class="mb-5 text-center border rounded course-instructor">
                <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Identitas</h3>
                <ul class="list-group list-group-flush text-left">
                  <div class="mb-4 text-center">
                    <img src="<?= base_url('avatar/').$user->avatar; ?>" alt="Avatar" height="150px" width="150px" />
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <li class="list-group-item"><span><b>E-mail :</b></span> <?= $user->email; ?></li>
                  <li class="list-group-item"><span><b>Username :</b></span> <?= $user->username; ?></li>
                  <li class="list-group-item"><span><b>Nick Name :</b></span> <?= $user->display_name; ?></li>
                  <!-- <li class="list-group-item"><span><b>Dibuat Tanggal : </b></span> <?//= $user->created_at; ?></li> -->
                  <a class="btn btn-success text-white btn-sm mt-3" href="<?= base_url('edit/').$user->id ?>" role="button">Edit</a>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="card text-white bg-warning">
                <div class="card-body">
                  <h5 class="card-title">Pencapaian 1</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card text-white bg-info">
                <div class="card-body">
                  <h5 class="card-title">Pencapaian 2</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
     
    <?php $this->load->view('_partials/footer'); ?>

  
    
  </div> 
  <!-- .site-wrap -->

  <?php $this->load->view('_partials/script'); ?>