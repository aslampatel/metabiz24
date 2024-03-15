<?php $result = $this->Model_users->get_settings();
if($this->session->userdata('sys_logged_in') != ''){
	header('location: '.base_url('supercontrol/Home'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	<title><?php echo $this->router->fetch_class();   ?> | <?php echo $result[0]->business_name; ?></title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url();?>uploads/<?php echo $result[0]->favicon; ?>" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url();?>admin-assets/css/bootstrap.min.css" rel="stylesheet"/>
	<!-- animate CSS-->
	<link href="<?php echo base_url();?>admin-assets/css/animate.css" rel="stylesheet" type="text/css"/>
	<!-- Icons CSS-->
	<link href="<?php echo base_url();?>admin-assets/css/icons.css" rel="stylesheet" type="text/css"/>
	<!-- Custom Style-->
	<link href="<?php echo base_url();?>admin-assets/css/app-style.css" rel="stylesheet"/>
</head>
<body class="authentication-bg">
	<!-- Start wrapper-->
	<div id="wrapper">
		<div class="card card-authentication1 mx-auto my-5 animated zoomIn">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<h4><?php echo $result[0]->business_name; ?> Admin Panel</h4>
					</div>
					<div class="card-title text-uppercase text-center py-2">Sign In</div>
					<?php if ($this->session->userdata('logoutsuccess')) {?>
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<div class="alert-icon">
								<i class="icon-check"></i>
							</div>
							<div class="alert-message">
								<span><strong>Success!</strong> <?php echo $this->session->userdata('logoutsuccess'); ?></span>
							</div>
						</div>
					<?php } ?>
					<?php 
					if ($this->session->userdata('loginerror')) {
					?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<div class="alert-icon">
								<i class="icon-close"></i>
							</div>
							<div class="alert-message">
								<span><strong>Failed!</strong> <?php echo $this->session->userdata('loginerror'); ?></span>
							</div>
						</div>

					<?php } ?>
					<form action="<?php echo base_url();?>supercontrol/Login/validate_login" method="post">
						<div class="form-group">
							<div class="position-relative has-icon-left">
								<label for="exampleInputUsername" class="sr-only">Username</label>
								<input type="text" name="username" required="" class="form-control" placeholder="Username">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="position-relative has-icon-left">
								<label for="exampleInputPassword" class="sr-only">Password</label>
								<input required="" type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>


						<div class="form-group">
							<button type="submit" class="btn btn-success  btn-block waves-effect waves-light">Sign In</button>
						</div>



					</form>
				</div>
			</div>
		</div>

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->
	</div><!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url();?>admin-assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>admin-assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>admin-assets/js/bootstrap.min.js"></script>
	<!-- waves effect js -->
	<script src="<?php echo base_url();?>admin-assets/js/waves.js"></script>
	<!-- Custom scripts -->
	<script src="<?php echo base_url();?>admin-assets/js/app-script.js"></script>

</body>
</html>
