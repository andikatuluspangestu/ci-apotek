
<div class="container">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 ms-3 text-gray-800">Dashboard</h1>
	<div class="row">
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-danger shadow-sm border-0 h-100 p-4">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah obat
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $count['obat']; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-fw fa-medkit fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-dark shadow-sm border-0 h-100 p-4">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Jumlah admin
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $count['admin']; ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-user fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-info shadow-sm border-0 h-100 p-4">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah supplier
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								<?= $count['supplier'] ?>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-fw fa-users fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

