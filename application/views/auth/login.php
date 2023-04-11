<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Apotek</title>

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url('assets/icon.svg') ?>" type="image/x-icon">

</head>

<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 pt-5">
				<div class="card o-hidden rounded border-0 shadow mt-5">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Masuk</h1>
									</div>

									<!-- Alert -->
									<?php if ($this->session->flashdata('info')) : ?>
										<div class="alert alert-danger">
											<?php echo $this->session->flashdata('info'); ?>
										</div>
									<?php endif; ?>

									<!-- ALert Validasi Error -->
									<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

									<!-- Form -->
									<form class="user" method="POST" action="<?php echo site_url('auth/login') ?>">
										<div class="form-group">
											<input name="username" type="text" class="form-control form-control-user" id="username" value="<?php echo set_value('username') ?>" autocomplete="off" placeholder="Username" style="border-radius: 10px;">
										</div>
										<div class="form-group">
											<input name="password" type="password" value="<?php echo set_value('password') ?>" class="form-control form-control-user" id="password" placeholder="Kata Sandi" style="border-radius: 10px;">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
								</div>
							</div>
						</div>
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