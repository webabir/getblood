<style>
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
                    <div class="d-flex aligin-items-center justify-content-between">
                        <h6 class="mb-4 fw-lighter">Blood Request</h6>
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
                                <form action="<?php echo  base_url(); ?>request-insert" method="post">
                                    <input class="d-none" type="text" name="user_name" value="<?php echo $_SESSION['username']; ?>">
                                    <input class="d-none" type="text" name="profile_id" value="<?php echo $_SESSION['id']; ?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <select style="background: #1f2430;" class="w-100 border-0 text-white rounded p-2" name="group_name" required>
                                                <option selected value="">--Blood Group--</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6  mb-2">
                                            <select name="city" id="id_parent" data-child-id='id_child' style="background: #1f2430;" class='form-select border-0 dependent-selects__parent w-100 text-white rounded p-2' required>
                                                <option value="">--City--</option>
                                                <!-- Dhaka -->
                                                <option value="Dhaka" data-child-options="Tangail|#Kishoreganj|#Manikganj|#Dhaka|#Gazipur|#Narsinghdi|#Narayanganj|#Munshiganj|#Faridpur|#Rajbari|#Gopalganj|#Madaripur|#Shariatpur">
                                                    Dhaka
                                                </option>
                                                <!-- Khulna -->
                                                <option value="Khulna" data-child-options="Kushtia|#Meherpur|#Chuadanga|#Jhenaidah|#Magura|#Narail|#Jessore|#Satkhira|#Khulna|#Bagerhat">
                                                    Khulna
                                                </option>
                                                <!-- Rangpur -->
                                                <option value="Rangpur" data-child-options="Panchagar|#Thakurgaon|#Dinajpur|#Nilphamari|#Lalmonirhat|#Rangpur|#Kurigram|#Gaibandha">
                                                    Rangpur
                                                </option>

                                                <!-- Rajshahi -->
                                                <option value="Rajshahi" data-child-options="Joypurhat|#Bogura|#Naogaon|#Natore|#Nawabganj|#Rajshahi|#Sirajganj|#Pabna">
                                                    Rajshahi
                                                </option>

                                                <!-- Barishal -->
                                                <option value="Barishal" data-child-options="Pirojpur|#Jhalakati|#Barishal|#Bhola|#Patuakhali|#Barguna">
                                                    Barishal
                                                </option>

                                                <!-- Mymensingh -->
                                                <option value="Mymensingh" data-child-options="Netrokona|#Mymensingh|#Sherpur|#Jamalpur">
                                                    Mymensingh
                                                </option>

                                                <!-- Sylhet -->
                                                <option value="Sylhet" data-child-options="Sunamganj|#Sylhet|#Moulvibazar|#Habiganj">
                                                    Sylhet
                                                </option>

                                                <!-- Chattogram -->
                                                <option value="Chattogram" data-child-options="Brahmanbaria|#Cumilla|#Chandpur|#Lakshmipur|#Noakhali|#Feni|#Chattogram|#Cox’s-Bazar|#Khagrachhari|#Rangamati|#Bandarban">
                                                    Chattogram
                                                </option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-6  mb-2">
                                            <input style="background: #1f2430;" class="w-100 text-white rounded p-2" type="number" name="user_phone" placeholder="Phone" required>
                                        </div>
                                        <div class="col-md-6  mb-2">
                                            <select name="district" id="id_child" style="background: #1f2430;" class='form-select border-0 dependent-selects__child w-100 text-white rounded p-2' required>
                                                <option value="">District</option>


                                                <!-- Dhaka -->
                                                <option value="Tangail">Tangail</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Manikganj">Manikganj</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Gazipur">Gazipur</option>
                                                <option value="Narsinghdi">Narsinghdi</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Faridpur">Faridpur</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Gopalganj">Gopalganj</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Shariatpur">Shariatpur</option>

                                                <!-- Khulna -->
                                                <option value="Kushtia">Kushtia</option>
                                                <option value="Meherpur">Meherpur</option>
                                                <option value="Chuadanga">Chuadanga</option>
                                                <option value="Jhenaidah">Jhenaidah</option>
                                                <option value="Magura">Magura</option>
                                                <option value="Narail">Narail</option>
                                                <option value="Jessore">Jessore</option>
                                                <option value="Satkhira">Satkhira</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Bagerhat">Bagerhat</option>

                                                <!-- Rangpur -->
                                                <option value="Panchagar">Panchagar</option>
                                                <option value="Thakurgaon">Thakurgaon</option>
                                                <option value="Dinajpur">Dinajpur</option>
                                                <option value="Nilphamari">Nilphamari</option>
                                                <option value="Lalmonirhat">Lalmonirhat</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Kurigram">Kurigram</option>
                                                <option value="Gaibandha">Gaibandha</option>

                                                <!-- Rajshahi -->
                                                <option value="Joypurhat">Joypurhat</option>
                                                <option value="Bogura">Bogura</option>
                                                <option value="Naogaon">Naogaon</option>
                                                <option value="Natore">Natore</option>
                                                <option value="Nawabganj">Nawabganj</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Sirajganj">Sirajganj</option>
                                                <option value="Pabna">Pabna</option>

                                                <!-- Barishal -->
                                                <option value="Pirojpur">Pirojpur</option>
                                                <option value="Jhalakati">Jhalakati</option>
                                                <option value="Barishal">Barishal</option>
                                                <option value="Bhola">Bhola</option>
                                                <option value="Patuakhali">Patuakhali</option>
                                                <option value="Barguna">Barguna</option>

                                                <!-- Mymensingh -->
                                                <option value="Netrokona">Netrokona</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Sherpur">Sherpur</option>
                                                <option value="Jamalpur">Jamalpur</option>

                                                <!-- Sylhet -->
                                                <option value="Sunamganj">Sunamganj</option>
                                                <option value="Sylhet">Sylhet</option>
                                                <option value="Moulvibazar">Moulvibazar</option>
                                                <option value="Habiganj">Habiganj</option>

                                                <!-- Chattogram -->
                                                <option value="Brahmanbaria">Brahmanbaria</option>
                                                <option value="Cumilla">Cumilla</option>
                                                <option value="Chandpur">Chandpur</option>
                                                <option value="Lakshmipur">Lakshmipur</option>
                                                <option value="Noakhali">Noakhali</option>
                                                <option value="Feni">Feni</option>
                                                <option value="Chattogram">Chattogram</option>
                                                <option value="Cox’s Bazar">Cox’s-Bazar</option>
                                                <option value="Khagrachhari">Khagrachhari</option>
                                                <option value="Rangamati">Rangamati</option>
                                                <option value="Bandarban">Bandarban</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6  mb-2">
                                            <input style="background: #1f2430;" class="w-100 text-white rounded p-2" type="text" name="user_facebook" placeholder="Facebook Link">
                                        </div>
                                        <div class="col-md-6  mb-2">
                                            <input style="background: #1f2430;" class="w-100 text-white rounded p-2" type="text" name="user_address" placeholder="Your address" required>
                                        </div>
                                    </div>
                                    <textarea style="background: #1f2430;" class="w-100 text-white rounded p-2  mb-0" name="request_text" rows="3" placeholder="Description" required></textarea>
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
                  
                     <!--all post view -->
                    <?php if ($user_request->result() != null) { ?>
                        <div class="col-sm-12 col-md-12 fs-15">
                            <?php foreach ($user_request->result() as $row) { ?>
                               <?php if(($row->city == (isset($_SESSION['city'])?$_SESSION['city']: TRUE))||( $row->profile_id == $_SESSION['id'])) {?>
                                    <div class="bg-dark rounded p-3 py-4 mb-3">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <div class="me-1 text-white">Request By : </div>
                                            <a href="donor-profile/<?php echo $row->profile_id; ?>" class="opinion-post-by fw-bold text-success text-decoration-underline"><?php echo $row->user_name; ?></a>
                                        </div>
                                        <div class="row px-3 justify-content-between align-items-center">
                                            <div class="col-md-6 d-grid request-post mb-4">
                                                <p class="text-break m-0"><?php echo $row->request_text; ?></p>
                                                <p class="fs-12 align-self-end text-asmani mt-3 mb-0 text-center">**রক্ত দিন জীবন বাঁচান**</p>
                                            </div>
                                            
                                            <div class="col-md-5 info">
                                            <div class="d-flex align-items-center mb-2">
                                                    <div class="me-1 text-white">Blood : </div>
                                                    <div class="opinion-post-by ">
                                                    <?php echo $row->group_name; ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="me-1 text-white">City : </div>
                                                    <div class="opinion-post-by ">
                                                    <?php echo $row->city; ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="me-1 text-white">Address : </div>
                                                    <div class="opinion-post-by ">
                                                    <?php echo $row->user_address; ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="me-1 text-white">Phone : </div>
                                                    <div class="opinion-post-by ">
                                                    <?php echo $row->user_phone; ?>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="me-1 text-white">Facebook : </div>
                                                    <?php  if($row->user_facebook) {?>
                                                        <a href=" <?php echo $row->user_facebook; ?>" class="opinion-post-by facebook-link fs-10 p-1 px-2 ">
                                                        Facebook
                                                        </a>
                                                    <?php }else{?>
                                                    <a class="facebook-link bg-gray fs-12 p-1 px-2 " href="javascript:;">No Value</a>
                                                    <?php }?>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <p class="text-center">No request yet for blood</p>
                                    <?php }?>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <p class="text-center">No request yet for blood</p>
                    <?php } ?>
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