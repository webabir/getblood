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
				<form action="<?php echo base_url() ?>user-add" method="post">
					<div class="row">
						<h6 class="mb-4 fw-lighter">Add Member</h6>

						<div class="col-sm-12 col-md-6">

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingName" name="name" required placeholder="name" required>
								<label for="floatingName">Name</label>
							</div>
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="floatingAge" name="age" placeholder="Age" required>
								<label for="floatingAge">Age</label>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" name="group_name" id="floatingSelect" aria-label="Floating label select example" required>
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
							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="floatingPhone" name="phone" placeholder="Phone" required>
								<label for="floatingPhone">Phone</label>
							</div>
							<?php if (isset($_SESSION['admin'])) { ?>
								<div class="form-floating mb-3">
									<select class="form-select" name="type" id="floatingSelect" aria-label="Floating label select example" required>
										<option value="">--User Type--</option>
										<option value="Donor">Donor</option>
										<option value="User">User</option>
										<option value="Volunteer">Volunteer</option>
									</select>
								</div>
							<?php } ?>

						</div>
						<div class="col-sm-12 col-md-6">

							<div class="form-floating mb-3">
								<select class="form-select" name="gender" id="floatingSelect" aria-label="Floating label select example" required>
									<option selected value="">--Gender--</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="form-floating mb-3">
								<select name="city" id="id_parent" data-child-id='id_child' class='form-select dependent-selects__parent' required>
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
							<div class="form-floating">
								<textarea class="form-control mb-3" name="street" id="floatingStreet" cols="30" rows="1" style="min-height:57px;height:57px;" placeholder="Street address" required></textarea>
								<label for="floatingStreet">Street</label>
							</div>

						</div>

						<div class="form-group mb-4 text-end">
							<button class="btn btn-primary btn-block md-ripples" type="submit">Submit</button>
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