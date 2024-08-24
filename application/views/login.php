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
		/* background: url('<?php echo base_url(); ?>assets/img/star-animation.gif'); */
		height: 100vh;
		position: relative;
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

	.login-dark .form-section {
		max-width: 320px;
		width: 90%;
		transform: translate(-50%, -50%);
		position: absolute;
		top: 50%;
		left: 50%;
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

	.admin-login-button {
		color: #5e596ee0;
		position: absolute;
		top: 5px;
		right: 5px;
	}

	.marquee-heading {
		width: 50%;
		margin: 0 auto;
	}

	@media(max-width:700px) {
		.marquee-heading {
			width: 80%;
			margin: 0 auto;
		}
	}
</style>


<div class="login-dark ">
	<!-- <h3 class="text-center pt-5" style="color: #00f3e8;">Give blood or receive blood</h3> -->
	<div class="rounded p-4 pt-5">
		<marquee style="color:#00ffff !important;" onmouseover="this.stop();" onmouseout="this.start();" direction="left" scrollamount="5" class="d-block m-auto fs-5 marquee-heading"> <span class="fs-3">"</span> নিজে রক্ত দান করুন অন্যকে রক্তদানে উৎসাহিত করুন <span class="fs-3">"</span><span class="d-inline-block px-5"></span></marquee>
	</div>
	<div class="form-section text-center">
		<form method="post" action="<?php echo base_url() ?>login">
			<a class="text-end admin-login-button" href="<?php echo base_url() ?>admin-page"><i class="fas fa-user-cog"></i></a>
			<h2 class="title text-center">User Login</h2>
			<?php
			$message = $this->session->userdata('message');
			if (isset($message)) {
				echo "<span style='font-size:14px;'>$message</span>";
				$this->session->unset_userdata('message');
			}
			?>
			<div class="illustration">
				<i class="icon ion-ios-locked-outline"></i>
			</div>
			<div class="form-group mb-3">
				<input class="form-control" type="number" name="phone" placeholder="Phone">
			</div>
			<div class="form-group mb-4">
				<button class="btn btn-primary btn-block w-100" type="submit">Log In</button>
			</div>

			<div class="text-center signup">
				Not a member?<a href="<?php echo base_url() ?>signup" class="text-decoration-none ancor-color"> SignUp</a>
			</div>

		</form>
		<div class="animation"></div>
	</div>
</div>