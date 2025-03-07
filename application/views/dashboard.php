 <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark-gray fw-bold" id="staticBackdropLabel">Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Please Login to get full service.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary">Ok</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  
  
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Content Start -->
    <div class="content">
        <?php
        $this->load->view('common/topbar');
        ?>
        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <div class="bg-secondary rounded p-4">
                        <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="5" class="d-block m-auto fs-5 text-success dashboard-marquee">**অনুগ্রহ করে সবাই প্রোফাইল আপডেট করুন ** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="fs-3">"</span>নিজে রক্ত দান করুন অন্যকে রক্তদানে উৎসাহিত করুন <span class="fs-3">"</span><span class="d-inline-block px-5"></span><span class="fs-3">"</span>এখানে আপনি রক্তদাতা হতে পারবেন এবং রক্ত গ্রহীতাও হতে পারবেন।&nbsp;&nbsp;&nbsp;আমাদের সঙ্গে থাকুন এবং শেয়ার করুন।&nbsp;&nbsp;&nbsp;আমরা প্রতিনিয়ত কাজ করে যাচ্ছি।&nbsp;&nbsp;&nbsp;ধন্যবাদ <span class="fs-3">"</span></marquee>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-sm-6 col-xl-4">
                    <a href="<?php echo base_url() ?>user-list">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <i class="fas fa-users fa-3x text-primary"></i>
                            <div class="ms-3 text-center">
                                <p class="mb-2">Total Users</p>
                                <h6 class="mb-0"><?php echo $user; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <a href="<?php echo base_url() ?>donor-list">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <i class="fas fa-fire fa-3x text-primary"></i>

                            <div class="ms-3 text-center">
                                <p class="mb-2">Blood Donors</p>
                                <h6 class="mb-0"><?php echo $donors; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <a href="<?php echo base_url() ?>volunteer-list">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <i class="fas fa-users-cog fa-3x text-primary"></i>
                            <div class="ms-3 text-center">
                                <p class="mb-2">Volunteers</p>
                                <h6 class="mb-0"><?php echo $volunteer; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Blood Group -->
            <div class="row g-4 mb-5">
                <h5 class="mb-0">Blood Group</h5>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-ab-neg">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">AB-</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_ab_neg; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-ab-pos">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">AB+</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_ab_pos; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-a-neg">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">A-</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_a_neg; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-a-pos">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">A+</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_a_pos; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-b-neg">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">B-</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_b_neg; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-b-pos">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">B+</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_b_pos; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-o-neg">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">O-</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_o_neg; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-o-pos">
                        <div class="bg-secondary d-box box-hover rounded d-flex align-items-center justify-content-between p-4 md-ripples">
                            <span class="fa-2x text-primary fw-900">O+</span>
                            <div class="ms-3 text-center">
                                <p class="mb-2">People</p>
                                <h6 class="mb-0"><?php echo $blood_o_pos; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- City -->
            <div class="row g-4">
                <h5 class="mb-0">Location</h5>

                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-khulna">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Khulna</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_khulna; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-dhaka">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Dhaka</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_dhaka; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-barishal">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Barishal</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_barishal; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-chattogram">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Chattogram</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_chattogram; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-mymensingh">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Mymensingh</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_mymensingh; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-rajshahi">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Rajshahi</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_rajshahi; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-sylhet">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Sylhet</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_sylhet; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <a href="<?php echo base_url() ?>search-rangpur">
                        <div class="bg-secondary text-center d-box box-hover rounded d-xl-grid d-flex align-items-center justify-content-between justify-content-xl-center p-4 md-ripples">
                            <h4 class="text-primary fw-lighter mb-0 fw-900 mb-xl-2">Rangpur</h4>
                            <div class="d-xl-flex d-md-inherit align-items-center justify-content-center ms-3 ms-xl-0 text-center">
                                <p class="mb-2 me-2 mb-xl-0">People</p>
                                <h6 class="mb-0 mt-xl-1"><?php echo $blood_rangpur; ?></h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Blank End -->

        <?php $this->load->view('common/footer-bottom') ?>
    </div>
    <!-- Content End -->
</div>