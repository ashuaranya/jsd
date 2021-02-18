<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?=base_url('assets/custom/images/fav.png');?>">
		<!-- Bootstrap CSS -->
		<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animate.css');?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/animation.css');?>" rel="stylesheet">
		<title><?=$title;?></title>
	</head>
	<body>
		<?php
		include('common/navbar.php');
		?>
		<div class="container mt-5">
			<div class="row justify-content-md-center">
				<div class="col-12">
					<div class="card rounded p-2 mt-5">
						<h1>Codeigniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
						<p>
							Login, registro.
						</p>
					</div>
				</div>
			</div>
		</div>
	 
		<!-- Popper.js first, then Bootstrap JS -->
		<script>
			window.jQuery || document.write('<script src="<?=base_url('assets/vendor/jquery/jquery-3.5.1.min.js');?>"><\/script>')
		</script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/popper.min.js');?>"></script>
		<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
	</body>
</html>