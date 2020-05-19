<div class="intro-section" id="home-section">
      
    <div class="slide-1" style="background-image: url('<?= base_url('assets/'); ?>images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <h1 data-aos="fade-up" data-aos-delay="100">Belajar Dari Pakar</h1>
                        <p class="mb-4 text-capitalize"  data-aos="fade-up" data-aos-delay="200">Daftarkan Diri Anda Pada Course Yang Dibawakan Oleh Pakar Pengajar Kami Yang Ahli dan Professional.</p>
                        <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill" data-backdrop="static" data-toggle="modal" data-target="#exampleModalCenter">Sign up Here</a></p>
                    </div>

                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                        <?= $this->session->flashdata('message'); ?>
                        <?= form_open('auth','class="form-box"'); ?>
                            <h3 class="h4 text-black mb-4">Sign in</h3>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email Addresss">
                                <?= form_error('email','<p class="text-danger">','</p>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <?= form_error('password','<p class="text-danger">','</p>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-pill" value="Sign In">
                            </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('_partials/signup'); ?>