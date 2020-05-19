<!-- .site-wrap -->
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <?php $this->load->view('_partials/navbar'); ?>
    <?php $this->load->view('_partials/banner'); ?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <?= $this->session->flashdata('message'); ?>
              <h3 class="text-black">Akademi</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eum iure voluptatum provident natus, deleniti alias corporis dolorem architecto eligendi consequatur, veniam ratione qui adipisci, doloremque aspernatur? Debitis, quia, praesentium.</p>

              <p class="mt-4"><a href="<?= base_url('kursussaya'); ?>" class="btn btn-primary">Kursus Saya</a></p>
            </div>

          </div>
          <div class="col-lg-4 pl-lg-5">

            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Profil</h3>
              <div class="mb-4 text-center">
                <img src="<?= base_url('avatar/').$user->avatar ?>" alt="Image" class="w-25 rounded-circle mb-4">  
                <h3 class="h5 text-black mb-4"><?= $user->username; ?></h3>
                <p>
                  <?php if($user->description): ?>
                    <?= $user->description ?>
                  <?php else:?>
                    <b>Deskripsi Diri</b>
                  <?php endif; ?>
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section courses-title bg-dark" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Kategori Kursus</h2>
          </div>
        </div>
      </div>
    </div>
      <div class="site-section courses-entry-wrap" data-aos="fade" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="owl-carousel col-12 nonloop-block-14">

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <a href="course-single.html"><img src="<?= base_url('assets') ?>/images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                  <h3><a href="#">Study Law of Physics</a></h3>
                  <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                </div>
                <div class="d-flex border-top stats">
                  <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                  <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <a href="course-single.html"><img src="<?= base_url('assets') ?>/images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                  <h3><a href="#">Logo Design Course</a></h3>
                  <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                </div>
                <div class="d-flex border-top stats">
                  <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                  <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <a href="course-single.html"><img src="<?= base_url('assets') ?>/images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                  <h3><a href="#">JS Programming Language</a></h3>
                  <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                </div>
                <div class="d-flex border-top stats">
                  <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                  <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                </div>
              </div>

              <div class="course bg-white h-100 align-self-stretch">
                <figure class="m-0">
                  <a href="course-single.html"><img src="<?= base_url('assets') ?>/images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </figure>
                <div class="course-inner-text py-4 px-4">
                  <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                  <h3><a href="#">Study Law of Physics</a></h3>
                  <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                </div>
                <div class="d-flex border-top stats">
                  <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                  <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
                </div>
              </div>

            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-7 text-center">
              <button class="customPrevBtn btn btn-primary m-1">Prev</button>
              <button class="customNextBtn btn btn-primary m-1">Next</button>
            </div>
          </div>
      </div>
    </div>
     
    <!-- Data Statis -->
    <div class="site-section courses-title bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Kursus Pilihan</h2>
          </div>
        </div>
        
        <div class="row">
        
          <div class="col-sm-4 mt-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mt-4">
            <div class="card">
            <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-4 mt-4">
            <div class="card">
            <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mt-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mt-4">
            <div class="card">
            <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-4 mt-4">
            <div class="card">
            <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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