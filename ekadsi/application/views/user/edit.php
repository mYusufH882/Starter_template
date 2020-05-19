<div class="site-wrap">      
    
    <?php $this->load->view('_partials/navbar'); ?>
    <?php $this->load->view('_partials/banner'); ?>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mb-5">
                    <div class="card p-5">
                        <?= form_open_multipart('user/edit/'.$user->id) ?>
                            <div class="text-center mb-2">
                                <img src="<?= base_url('avatar/').$user->avatar; ?>" alt="Avatar" height="150px" width="150px" class="mb-5" />
                                <div class="form-group mb-4">
                                    <div class="fileUpload p-1 btn btn-sm btn-primary">
                                        <span class="text-white">Change Avatar</span>
                                        <input type="file" class="upload" id="btnChange" name="re_upload" onchange="document.getElementById('filename').value=this.value">
                                        <input type="text" id="filename" class="pl-1" placeholder="Ganti Gambar" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?= $user->email ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" value="<?= $user->username ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nickname</label>
                                <input type="text" name="displayname" class="form-control" id="exampleFormControlInput1" value="<?= $user->display_name ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi diri</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?= $user->description ?></textarea>
                            </div>

                            <button class="btn btn-warning text-white btn-sm mt-3">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/footer'); ?>

</div> 
<!-- .site-wrap -->

<?php $this->load->view('_partials/script'); ?>