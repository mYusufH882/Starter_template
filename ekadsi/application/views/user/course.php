    <div class="site-wrap">
        <?php $this->load->view('_partials/navbar'); ?>
        <?php $this->load->view('_partials/banner'); ?>
    
        <!-- site-course -->
        <div class="site-course p-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, repellat? Doloribus harum sunt consectetur, deleniti ea vel saepe ducimus suscipit commodi voluptate sequi obcaecati ut? At ducimus et nihil quo?
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis reiciendis dolorum, aliquid distinctio odio consectetur nostrum deleniti sint praesentium error provident necessitatibus eveniet consequatur architecto debitis eum temporibus magni nulla.
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur sed deleniti qui atque modi laboriosam aliquid, saepe exercitationem laborum ipsum ad labore similique numquam rem culpa sequi. Totam, sed nobis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site-course -->

        <?php $this->load->view('_partials/footer'); ?>
    </div>

<?php $this->load->view('_partials/js'); ?>