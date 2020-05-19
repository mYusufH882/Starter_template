  <?php if($this->uri->segment(1) == "user"): ?>
<footer class="footer-section">
  <?php else: ?>  
<footer class="footer-section text-white" style="background:#343A40;">
  <?php endif; ?>

  <div class="container">

    <div class="row">
      <div class="col-md-8">
        <h3 style="color:#A102EF;">Tentang Eduka</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
      </div>

        <div class="col-md-4 ml-auto pr-3">
          <h3 style="color:#A102EF;">Partners</h3>
          <img src="<?= base_url('gambar/ekadsi.png') ?>" alt="ekadsi" height="55px" width="55px">
          <img src="<?= base_url('gambar/yukpraktek.jpg') ?>" alt="yukpraktek" height="55px" width="55px">
        </div>
    </div>

    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        </div>
      </div>        
    </div>
  
  </div>

</footer>