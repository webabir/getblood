<?php
$this->load->view('common/header');
?>

<style>
	* {
		margin: 0;
		padding: 0;
	}

	.ancor-color {
		color: #16c199;
	}

	.login-dark {
		background: linear-gradient(45deg, #17064e, #440000);


	}

	/* .login-dark:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, #6a0c0c4d,#00444e85);
    filter: blur(20px);
} */

	.form-section {
		position: relative;
	}

	.animation {
		position: absolute;
		content: "";
		height: 100%;
		width: 100%;
		filter: blur(7px);
		background: linear-gradient(45deg,
				#ff0000,
				#ff7300,
				#fffb00,
				#48ff00,
				#00ffd5,
				#002bff,
				#7a00ff,
				#ff00c8,
				#ff0000);
		background-size: 400%;
		transition: opacity 0.3s ease-in-out;
		animation: animate 20s linear infinite;
		top: 0;
		left: 0;
	}

	@keyframes animate {
		0% {
			background-position: 0 0;
		}

		50% {
			background-position: 400% 0;
		}

		100% {
			background-position: 0 0;
		}
	}



	.login-dark form {
		background-color: #070a10;
		padding: 40px;
		border-radius: 4px;
		color: #fff;
		box-shadow: 0px 0px 5px #008f8d;
		position: relative;
		z-index: 1;
	}

	.login-dark form .form-control:focus {
		border-color: #00ff8b;
	}

	.login-dark .illustration {
		text-align: center;
		padding: 15px 0 20px;
		font-size: 100px;
		color: #2980ef;
	}

	.login-dark form .form-control {
		background: none;
		border: none;
		border-bottom: 1px solid #434a52;
		border-radius: 0;
		box-shadow: none;
		outline: none;
		color: inherit;
		transition: 0.4s;
	}

	.login-dark form .form-select {
		background-color: #070a10;
		border: none;
		border-bottom: 1px solid #434a52;
		border-radius: 0;
		box-shadow: none;
		outline: none;
		color: inherit;
		transition: 0.4s;
		color: #76777c;
	}

	.login-dark form .btn-primary {
		background: #214a80;
		border: none;
		border-radius: 4px;
		padding: 11px;
		box-shadow: none;
		margin-top: 26px;
		text-shadow: none;
		outline: none;
		transition: 0.6s;
		font-weight: 600;
	}

	.login-dark form .btn-primary:hover,
	.login-dark form .btn-primary:active {
		background: #00ff8b;
		outline: none;
		color: #000000;
	}

	.login-dark form .forgot {
		display: block;
		text-align: center;
		font-size: 12px;
		color: #6f7a85;
		opacity: 0.9;
		text-decoration: none;
	}

	.login-dark form .forgot:hover,
	.login-dark form .forgot:active {
		opacity: 1;
		text-decoration: none;
	}

	.login-dark form .btn-primary:active {
		transform: translateY(1px);
	}

	.signup {
		font-size: 13px;
	}

	.title {
		font-size: 26px;
	}
</style>
<div class="login-dark py-5">
	<div class="row m-0 py-5">
		<div class="col-md-7 m-auto">
			<div class="form-section">
				<form method="post" action="<?php echo base_url();?>signup-page">
					<h2 class="title text-center">Registration</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group mb-3">
								<input class="form-control" type="text" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input class="form-control mb-3" type="number" name="age" placeholder="Age" required>
							</div>
							<div class="form-group mb-3">
								<select class="form-select " name="group_name" required>
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
							<div class="form-group">
								<input class="form-control mb-3" type="number" name="phone" placeholder="Phone" required>
							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group mb-3">
								<select class="form-select " name="gender" required>
									<option selected value="">--Gender--</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
							</div>
							<div class="form-group mb-3">
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
							<div class="form-group mb-3">
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
							<div class="form-group">
								<textarea class="form-control mb-3" name="street" id="floatingStreet" cols="30" rows="1" style="min-height:38px;height:38px;" placeholder="Street address" required></textarea>
							</div>

						</div>
					</div>


					<div class="form-group mb-4">
						<button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
					</div>

					<div class="text-center signup">
						Already a member? <a href="<?php echo base_url() ?>" class="text-decoration-none ancor-color">Login</a>
					</div>
				</form>
				<div class="animation"></div>
			</div>
		</div>
	</div>

</div>


<?php
$this->load->view('common/footer');
$this->load->view('sweetalert');

?>