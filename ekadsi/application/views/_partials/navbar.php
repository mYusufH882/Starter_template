<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
        <span class="js-menu-toggle">X</span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <div class="site-logo mr-auto w-25">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?= base_url('gambar/ekadsi.png') ?>" alt="eduka web" height="45px" width="45px">
                </a>
            </div>

            <div class="mx-auto text-center">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                        <?php if($this->uri->segment(1) == "auth"  || $this->uri->segment(1) == "registration" || $this->uri->segment(1) == ""): ?>
                            <li><a href="#home-section" class="nav-link">Beranda</a></li>
                            <li><a href="#courses-section" class="nav-link">Kursus</a></li>
                            <li><a href="#programs-section" class="nav-link">Program</a></li>
                            <li><a href="#teachers-section" class="nav-link">Pengajar</a></li>
                            <li><a href="#information-section" class="nav-link">Informasi</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>

            <div class="ml-auto w-25">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                    <?php if($this->uri->segment(1) == "auth" || $this->uri->segment(1) == "registration" || $this->uri->segment(1) == ""): ?>
                        <li class="cta"><a href="#contact-section" class="nav-link"><span>Hubungi Kami</span></a></li>
                    <?php else: ?>    
                        <li class="">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
                                <img src="<?= base_url('avatar/').$user->avatar ?>" class="mr-3 rounded-circle" height="25px" width="25px">
                                <?= strtoupper($user->username); ?>
                            </a>
                            <div class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown">
                                <?php if($this->uri->segment(1) != "profile"): ?>
                                    <a class="dropdown-item text-white" href="<?= base_url('profile'); ?>">Profil</a>
                                <?php endif; ?>
                                <?php if($this->uri->segment(1) != "kursussaya"): ?>
                                    <a class="dropdown-item text-white" href="<?= base_url('kursussaya'); ?>">Kelas Saya</a>
                                <?php endif; ?>
                                <?php if($this->uri->segment(1) != "user"): ?>
                                    <a class="dropdown-item text-white" href="<?= base_url('user'); ?>">Beranda</a>
                                <?php endif; ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-white" href="<?= base_url('logout'); ?>">Logout</a>
                            </div>
                        </li>
                    <?php endif; ?>
                    </ul>
                </nav>
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right active"><span class="icon-menu h3">=</span></a>
            </div>
        </div>
    </div>
      
</header>