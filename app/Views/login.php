<?php
include('common/header.php');
?>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
						
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>JSD LOGIN</b></h1>
                                    </div>
                                    <?php if(session()->getFlashdata('msg')):?>
									<div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
									<?php endif;?>
									<form action="<?=base_url('auth');?>" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." value="<?=set_value('email');?>">
										</div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
                                        
                                    </form>
									<hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    
                                </div>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
								<div class="row">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php
include('common/footer_links.php');
?>

</body>
</html>img
