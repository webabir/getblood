<style>
    * {
        letter-spacing: 1px;
    }
    .request-post {
    background: #151a22;
    min-height: 100px;
    font-size: 17px;
    padding: 10px 20px;

    }

</style>
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
            <div class="bg-secondary rounded h-100 p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex aligin-items-center justify-content-between">
                            <h6 class="mb-4 fw-lighter">Comment Box</h6>
                            <div class="form-group mb-4 text-end">
                                <?php if (isset($_SESSION['username'])) { ?>
                                    <button class="btn btn-primary btn-block md-ripples" id="postToggleBtn" onclick="postToggle()" type="submit">Add</button>
                                <?php } ?>
                            </div>
                        </div>
    
                        <!-- post add form -->
                        <?php if (isset($_SESSION['username'])) { ?>
                            <div id="postToggleContent" 
                            <?php if(isset($_SESSION['OpenFormBox'])){ 
                                    echo 'style="display: block;"';
                                    unset($_SESSION['OpenFormBox']);
                                }else{
                                    echo 'style="display: none;"';
                                } 
                                ?> 
                             class="col-12">
                                <div class="bg-dark rounded p-3 py-4 mb-3">
                                    <form action="<?php echo  base_url(); ?>post-insert" method="post">
                                        <input class="d-none" type="text" name="user_name" value="<?php echo $_SESSION['username']; ?>">
                                        <input class="d-none" type="text" name="profile_id" value="<?php echo $_SESSION['id']; ?>">
                                        <textarea style="background: #1f2430;" class="w-100 text-white rounded p-2" name="user_post" rows="3" placeholder="Write your valuable feedback here" required></textarea>
                                        <?php
                                            $message = $this->session->userdata('message');
                                            if (isset($message)) {
                                                echo "<span style='font-size:14px;'>$message</span>";
                                                $this->session->unset_userdata('message');
                                            }
                                        ?>
                                        <div class="text-end mt-2">
                                            <button class="btn btn-info btn-block md-ripples me-2" onclick="postToggle()" type="button">Cancle</button>
                                            <button class="btn btn-primary btn-block md-ripples" type="submit">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- post add form -->
                        <?php if ($user_comment->result() != null) { ?>
                            <div class="col-sm-12 col-md-12 fs-15">
                                <?php foreach ($user_comment->result() as $row) { ?>
                                    <div class="bg-dark rounded p-3 py-4 mb-3">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <div class="me-1 text-white">Comment By : </div>
                                            <a href="donor-profile/<?php echo $row->profile_id; ?>" class="opinion-post-by fw-bold text-success text-decoration-underline"><?php echo $row->user_name; ?></a>
                                        </div>
                                        <div class="request-post d-grid">
                                            <p class="mb-0">
                                                <?php echo $row->user_post; ?>
                                            </p>
                                            <p class="fs-12 align-self-end text-asmani mt-3 mb-0 text-center">**রক্ত দিন জীবন বাঁচান**</p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <p class="text-center">No comments yet</p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- Blank End -->

        <?php $this->load->view('common/footer-bottom') ?>

    </div>
    <!-- Content End -->
</div>


<script>
    function postToggle() {
        var postToggleContent = document.getElementById('postToggleContent');
        var postToggleBtn = document.getElementById('postToggleBtn');

        if (postToggleContent.style.display === "none") {
            postToggleContent.style.display = "";
            postToggleBtn.style.display = "none";
        } else {
            postToggleContent.style.display = "none";
            postToggleBtn.style.display = "";
        }
    }
</script>