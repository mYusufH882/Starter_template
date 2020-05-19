<!-- Modal Sign Up Here -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ECCSRG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          <?= form_open('registration','class="form-box"'); ?>
            <h3 class="h4 text-black mb-4">Sign Up</h3>
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <p class="text-danger display-5">*Password minimal 8 karakter</p>
            <div class="form-group mb-4">
              <input type="password" name="re_pass" class="form-control" placeholder="Re-type Password">
            </div>       
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
            </div> 
          <?= form_close(); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-pill btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>