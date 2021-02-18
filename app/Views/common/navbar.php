<?php
$uri 	= service('uri');
?>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Eighth navbar example">
	<div class="container">
		<a class="navbar-brand" href="<?=base_url();?>">
			<img class="img-fluid" src="<?=base_url('assets/custom/images/logo_navbar.svg');?>" id="logo_custom"  alt="logo">
		</a>
		
		<div class="collapse navbar-collapse" id="navbarsExample07">
			<ul class="navbar-nav flex-row flex-wrap ms-md-auto">
				<li class="nav-item col-6 col-md-auto">
					<a class="nav-link" href="https://linuxitos.com/blog/about">About</a>
				</li>
				<li class="nav-item col-6 col-md-auto">
					<a class="nav-link" href="https://linuxitos.com/blog/servicios">Services</a>
				</li>
				<li class="nav-item col-6 col-md-auto">
					<a class="nav-link" href="https://linuxitos.com/blog/contacto">Contact</a>
				</li>

				<?php if (session()->get('logged_in')):?>
					<li class="nav-item col-6 col-md-auto dropdown desplegable">
						<a class="nav-link dropdown-toggle" href="#" id="menu-options" data-bs-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-user"></i> User
						</a>
						<div class="dropdown-menu dropdown-menu-end desplegable-menu div-menu" aria-labelledby="menu-options">
							<a class="dropdown-item <?=($uri->getSegment(1) == 'profile' ? 'active' : '')?>" href="<?=base_url('profile');?>">
								Profile <i class="fas fa-sign-out-alt mt-1 float-end"></i>
							</a>
							<a class="dropdown-item <?=($uri->getSegment(1) == 'dashboard' ? 'active' : '')?>" href="<?=base_url('dashboard');?>">
								Dashboard <i class="fas fa-sign-out-alt mt-1 float-end"></i>
							</a>
							<a class="dropdown-item <?=($uri->getSegment(1) == 'logout' ? 'active' : '')?>" href="<?=base_url('logout');?>">
								Salir <i class="fas fa-sign-out-alt mt-1 float-end"></i>
							</a>
						</div>
					</li>
				<?php endif; ?>
			</ul>
			<?php
				if (!session()->get('logged_in')){
					echo '<a class="my-2 my-md-0 ms-md-3 me-2 btn btn-outline-warning '.($uri->getSegment(1) =='register'?'d-none' : 'd-lg-block').'" href="'.base_url('register').'">Registro</a> ';
					echo ' <a class="btn btn-outline-primary '.($uri->getSegment(1) =='login'?'d-none' : 'd-lg-block').'" href="'.base_url('login').'">Iniciar Sesión</a>';
				}
			?>
		</div>
	</div>
</nav>