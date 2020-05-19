<!-- .site-wrap -->
<div>
        
    <?php $this->load->view('_partials/navbar', $judul); ?>

    <?php $this->load->view('itempage/home'); ?>

    <?php $this->load->view('itempage/courses'); ?>

    <?php $this->load->view('itempage/programs'); ?>

    <?php $this->load->view('itempage/teachers'); ?>

    <?php $this->load->view('itempage/information'); ?>

    <?php $this->load->view('itempage/contact'); ?>  
    
    <?php $this->load->view('_partials/footer'); ?>
  
</div> 
<!-- .site-wrap -->

<?php $this->load->view('_partials/script'); ?>