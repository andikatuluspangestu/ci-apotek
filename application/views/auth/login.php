<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Apotek</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/icon.svg') ?>" type="image/x-icon">
    <style>
    	.bg {
    		background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(153,103,186,1) 41.2%, rgba(0,113,227,1) 90% );
    	}
    </style>
</head>

<body class="bg">

	<div class="container">




		<!-- Outer Row -->
		<div class="row justify-content-center">
			<div class="col-xs-12">
				<br><br><br><br><br><br>
				<div class="card o-hidden border-0 shadow" style="border-radius: 2px;">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Masuk</h1>
									</div>
									<?php if ($this->session->flashdata('info')) : ?>
									<div class="alert alert-danger">
										<?php echo $this->session->flashdata('info'); ?>
									</div>
									<?php endif; ?>
									<?php echo validation_errors('  <div class="alert alert-danger">', '</div>'); ?>
									<form class="user" method="POST" action="<?php echo site_url('auth/login') ?>">
										<div class="form-group">
											<input name="username" type="text" class="form-control form-control-user"
												id="username" value="<?php  echo set_value('username') ?>"
                                                autocomplete="off" placeholder="Username" style="border-radius: 10px;">
										</div>
										<div class="form-group">
											<input name="password" type="password"
												value="<?php echo set_value('password') ?>"
												class="form-control form-control-user" id="password"
												placeholder="Kata Sandi" style="border-radius: 10px;">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
								</div>
							</div>
						</div>
						<span class="text-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design With <span style="color: red;">&hearts;</span> by Sutrisno</span>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
