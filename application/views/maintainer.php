<style>
    .box {
        border: 2px solid;
        position: relative;
        overflow: hidden;
    }

    .box img {
        width: 100%;
        display: block;
        transform: rotatey(0);
        transition: 0.5s ease-in-out;
    }

    .box:hover img {
        transform: rotatey(90deg);
    }

    .box .innner-text:after {
        content: "";
        background-color: #191c24;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        transition: 0.5s ease-in-out;
        opacity: 1;
        transform: rotateY(90deg);
    }

    /*.box:hover .innner-text:after {*/
    /*    transform: rotateY(0);*/
    /*}*/
    .box .innner-text:after {
        transform: rotateY(0);
    }



    .text {
        position: absolute;
        top: 50%;
        left: 50%;
        text-align: center;
        z-index: 1;
        transform: translate(-50%, -50%);
        transition: 0.8s;
        opacity: 0;
        width: 100%;
    }

    /*.box:hover .text {*/
    /*    opacity: 1;*/
    /*}*/
    .box .text {
        opacity: 1;
    }
    .card-art {
        background-image: linear-gradient(188deg, #bcff00, #b7a700, #43dcff, #5811c9);
    }
    .box .text a {
        color: #000000;
        text-decoration: none;
        background: #00dcff;
        padding: 2px 10px;
        border-radius: 5px;
        font-weight: 600;
    }

    .box .text p {
        width: 140px;
        margin: 0 auto;
        background: #00dcff;
        color: #000;
        font-weight: 600;
        border-radius: 6px;
        margin-bottom: 12px;
        padding: 2px;
    }

    .card-body {
        min-height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
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
                <h6 class="mb-4 fw-lighter">Maintainers</h6>
                <div class="row justify-content-center mx-md-3">
                    <div class="p-4 text-success mb-5">
                        <p>
                            আপনাদের কথা চিন্তা করেই আমাদের এই ক্ষুদ্র উদ্যোগ । আমার প্রায় দেখেছি রক্তের জন্য মানুষ অনেক ভোগান্তিতে পড়েন । রক্তের ডোনার কোথায় পাবে কাকে ফোন দেবে । এসব নিয়ে অনেক ভোগান্তিতে পড়তে হয় । এসব কিছু চিন্তা করেই আমাদের এই ছোট প্রচেষ্টা । আমরা আছি আপনাদের পাশে । আপনারাও আমাদের পাশে থাকুন আমাদের সহযোগিতা করুন । কোনো ভুল-ভ্রান্তি হলে আমাদের অবশ্যই জানান, ধন্যবাদ ।
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box  border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/Tanvir.jpeg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01400276954</p>
                                        <a href="https://www.facebook.com/Tanvir5141">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Sheikh Tanvir Ahamed</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/Shuvro.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01789239422</p>
                                        <a href="https://www.facebook.com/shuvro.squad">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Aminul Islam Shuvro</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2 d-none">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/Zehade.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01917322635</p>
                                        <a href="https://www.facebook.com/Zehade">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Robiul Awaul Zehade</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2 d-none">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/Anik.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01909691080</p>
                                        <a href="https://www.facebook.com/profile.php?id=100024759894122">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Anik Das</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/abir.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01997343783</p>
                                        <a href="https://www.facebook.com/profile.php?id=100068595102723">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Abir Hossain</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/arif.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01978191810</p>
                                        <a href="https://www.facebook.com/mdarifahmed.ahmed.50">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Arif Ahamed</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  mb-4 px-2">
                        <div class="card border-0 card-art p-1">
                            <div class="card-header box border-0 p-0">
                                <img class="w-100 rounded-top " src="<?php echo base_url() ?>/assets/img/shajid.jpg" alt="">
                                <div class="innner-text">
                                    <div class="text">
                                        <p>01700569003</p>
                                        <a href="https://www.facebook.com/Devil.ComeS.Alive">Facebook</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border-0 text-center bg-info py-2">
                                <h6 class="text-dark mb-0">Shajidul Islam</h6>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 text-success text-center mt-5">
                        <p>
                            <span class="fs-3">***</span> রক্তদান একটি মহৎ কাজ । রক্তদান করে আপনিও হতে পারেন একজন মহৎ ব্যক্তি <span class="fs-3">***</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Blank End -->

        <?php $this->load->view('common/footer-bottom') ?>

    </div>
    <!-- Content End -->
</div>