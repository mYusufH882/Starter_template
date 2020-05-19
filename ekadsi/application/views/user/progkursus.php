<!-- .site-wrap -->
    <div class="site-wrap">

        <?php $this->load->view('_partials/navbar'); ?>
        <?php $this->load->view('_partials/banner'); ?>
    
        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                    <h2 class="section-title">Progress Kursus</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <a href="<?= base_url('kursus'); ?>" class="text-white">
                                <img class="card-img-top" src="<?= base_url('assets') ?>/images/img_2.jpg" alt="Card image cap">
                            </a>
                            <div class="card-body p-4">
                                <h3>Web Development</h3>
                                <span>Progress Belajar</span>
                                <div class="progress mb-4">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <a href="<?= base_url('kursus'); ?>" class="text-success">Buka Materi &gt;&gt;&gt;</a>
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