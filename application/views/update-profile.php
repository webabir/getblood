<style>
	.form-control:disabled,
	.form-control:read-only {
		background-color: #000000 !important;
		opacity: 0.6;
		color: red;
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

				<form action="<?php echo base_url() ?>profile-update" method="post">
					<div class="row">
						<h6 class="mb-4 fw-lighter">Update Profile</h6>
						<div class="col-sm-12 col-md-6">
							<input type="text" class="d-none" name="id" value="<?php echo $admin_data_id->id; ?>">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingName" name="name" value="<?php echo $admin_data_id->name; ?>" placeholder="name" required>
								<label for="floatingName">Name</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingAge" value="<?php echo $admin_data_id->age; ?>" name="age" placeholder="Age" required>
								<label for="floatingAge">Age</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" name="group_name" id="floatingSelect" aria-label="Floating label select example" required>
									<option value="">--Blood Group--</option>
									<option selected value="<?php echo $admin_data_id->group_name; ?>"><?php echo $admin_data_id->group_name; ?></option>
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
							<div class="form-floating mb-3">
								<select class="form-select" name="gender" id="floatingStatus" aria-label="Floating label select example" required>
									<option value="">--Gender--</option>
									<option selected value="<?php echo $admin_data_id->gender; ?>"><?php echo $admin_data_id->gender; ?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingPhone" value="<?php echo $admin_data_id->phone; ?>" name="phone" placeholder="Phone" required>
								<label for="floatingPhone">Phone</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingFacebook" value="<?php echo $admin_data_id->facebook; ?>" name="facebook" placeholder="Facebook">
								<label for="floatingPhone">Add Facebook Link</label>
							</div>

						</div>
						<div class="col-sm-12 col-md-6">
							<div class="form-floating mb-3">
								<select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example" required>
									<option value="">--User Type--</option>
									<option selected value="<?php echo $admin_data_id->type; ?>"><?php echo $admin_data_id->type; ?></option>
									<option value="Donor">Donor</option>
									<option value="User">User</option>
									<?php if ($_SESSION['admin']) {
										echo '<option value="Volunteer">Volunteer</option>';
									} ?>

								</select>
							</div>
							<div class="form-floating mb-3">
								<select onclick="test()" name="city" id="id_parent" data-child-id='id_child' class='form-select dependent-selects__parent'>
									<option selected value=""><?php echo $admin_data_id->city; ?></option>
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
							<div class="form-floating mb-3">
								<select name="district" id="id_child" class='form-select dependent-selects__child' required>
									<option value="">--District--</option>
									<option selected value="<?php echo $admin_data_id->district; ?>"><?php echo $admin_data_id->district; ?></option>

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
							<div class="form-floating">
								<textarea class="form-control mb-3" name="street" id="floatingStreet" cols="30" rows="1" style="min-height:57px;height:57px;" placeholder="Street address" required><?php echo $admin_data_id->street; ?></textarea>
								<label for="floatingStreet">Street Address</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" name="status" id="floatingStatus" aria-label="Floating label select example" required>
									<option value="">--Status--</option>
									<option selected value="<?php echo $admin_data_id->status; ?>"><?php echo $admin_data_id->status; ?></option>
									<option value="Available">Available</option>
									<option value="unavailable">Unavailable</option>
								</select>
							</div>
							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="floatingAge" value="<?php echo $admin_data_id->last_donate_date; ?>" name="last_donate_date" placeholder="Last Doante" >
								<label for="floatingAge">Last Donate</label>
							</div>
						</div>

						<div class="form-group mb-4 text-end">
							<a href="<?php echo base_url(); ?>user-profile/<?php echo $_SESSION['id']; ?>" class="btn btn-info btn-block me-2  md-ripples" type="button">Back</a>
							<button class="btn btn-primary btn-block  md-ripples" type="submit">Update</button>
						</div>
				</form>
			</div>
		</div>

	</div>
	<!-- Blank End -->

	<?php $this->load->view('common/footer-bottom') ?>
</div>
<!-- Content End -->
</div>