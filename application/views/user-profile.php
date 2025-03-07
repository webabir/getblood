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
			<div class="bg-secondary rounded h-100 p-4 ">
				<div>
					<h6 class="mb-4 fw-lighter"><?php echo $table_title; ?></h6>
					<div class="row flex-direction-reverse">
						<div class="col-md-6 ">
							<input type="text" class="d-none" name="id" value="<?php echo $admin_data_id->id; ?>">
							<div class="d-flex j-b-m  bg-dark px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Name :</div>
								<div class="text-m-end"><?php echo $admin_data_id->name; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Age :</div>
								<div class="text-m-end"><?php echo $admin_data_id->age; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Gender :</div>
								<div class="text-m-end"><?php echo $admin_data_id->gender; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Blood Group :</div>
								<div class="text-m-end"><?php echo $admin_data_id->group_name; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">User Type :</div>
								<div class="text-m-end"><?php echo $admin_data_id->type; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">City :</div>
								<div class="text-m-end"><?php echo $admin_data_id->city; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">District :</div>
								<div class="text-m-end"><?php echo $admin_data_id->district; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Address :</div>
								<div class="text-m-end"><?php echo $admin_data_id->street; ?></div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Phone :</div>
								<div class="text-m-end d-flex align-items-center">

									<?php if ($userNumber == true) {
										echo isset($admin_data_id->number_security) ? $admin_data_id->phone : '***********';
									} else {
										echo '***********';
									}
									?>
									<?php if ($_SESSION['config-pro-btn'] == true) { ?>
										<form class="ms-3 d-flex align-items-center" action="<?php echo base_url() ?>secure-number/<?php echo $admin_data_id->id; ?>" method="post">
											<label onclick="toggle()" class="switch">
												<input <?php echo isset($admin_data_id->number_security) ? "checked" : "" ?> name="number_security" type="checkbox">
												<span class="slider round"></span>
											</label>
											<button id="toggleBtn" class="btn d-none" type="submit">send</button>
										</form>
									<?php } ?>
								</div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Facebook :</div>
								<div class="text-m-end">
									<?php
									if ($admin_data_id->facebook != null) {
										echo '<a class="facebook-link fs-12 p-1 px-2" href="' . $admin_data_id->facebook . '">Facebook</a>';
									} else {
										echo '<a class="facebook-link bg-gray fs-12 p-1 px-2 " href="javascript:;">No Value</a>';
									}

									?>
								</div>
							</div>
							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Status :</div>
								<div class="text-m-end">
									<div>
										<?php
										if ($admin_data_id->status == null) {
											echo "";
										} else {
											if ($admin_data_id->status == 'Available') {
												echo "<span class='bg-success text-white p-1 px-2 rounded fs-10'>$admin_data_id->status</span>";
											} else {
												echo "<span class='bg-gray p-1 px-2 rounded fs-10'>$admin_data_id->status</span>";
											}
										}
										?>
										<div class="fs-10 mt-1">
											You can change your status at any time
										</div>
									</div>
								</div>

							</div>

							<div class="d-flex bg-dark j-b-m  px-3 py-3 mb-2 rounded ">
								<div class="me-3 text-asmani profile-details-type">Last Donate :</div>
								<div class="text-m-end">
									<?php
									if ($admin_data_id->last_donate_date != null) {
										echo $admin_data_id->last_donate_date ;
									} else {
										echo 'Not Set';
									}

									?>
								</div>
							</div>

						</div>
						<style>

						</style>
						<div class="col-md-6 butterfly text-center d-grid mb-4 mb-lg-0 mb-md-0">
							<img class="blood-cartoon" src="<?php echo base_url() ?>assets/img/blood-cartoon.png" alt="">
							<div class="wave"></div>
						</div>
					</div>

					<?php if ($_SESSION['config-pro-btn'] == true) { ?>
						<div class="form-group mb-4 text-end">
							<a class="btn btn-primary px-4  md-ripples" href="<?php echo base_url() ?>profile-update/<?php echo $admin_data_id->id; ?>" type="button">Edit</a>
						</div>
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
	function toggle() {
		setTimeout(clickBtn(), 3000);

		function clickBtn() {
			document.getElementById('toggleBtn').click();
		}
	}
</script>