<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Log in</title>
	<link rel="stylesheet" href="public\bootstrap513\bootstrap.min.css" />
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="public/plugins/toastr/toastr.min.css">

	<style>
		/* Định dạng của phần tử chứa văn bản */
		*{
			user-select: none;
			/* Ngăn chặn việc chọn văn bản */
		}
	</style>
	<script>
		// Ngăn chặn sự chọn văn bản khi double click
		document.addEventListener('dblclick', function(event) {
			event.preventDefault(); // Ngăn chặn hành động mặc định của sự kiện
		});
	</script>
</head>
<?php if (session()->has('error') && session()->has('pass')) { $user = session('user'); $pass = session('pass');} ?>
<body class="hold-transition login-page">


	<div class="login-box">
		<div class="login-logo">
			<a href="public/index2.html">Đăng nhập</a>
			<?php
			if (isset($error)) {
				echo var_dump($error);
			}

			?>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">Đăng nhập trang quản trị web <?= WEB_TITLE?></p>

				<form action="login" method="post">
					<div class="input-group mb-3">
						<input name="username" class="form-control" value="<?= isset($user) ? $user : ''; ?>" placeholder="tên đăng nhập">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="password" id="pass" name="pass" value="<?= isset($pass)?$pass:'' ?>" class="form-control" placeholder="Mật khẩu">
						<div class="input-group-append">
							<div style="cursor: pointer;" id="showPass" class="input-group-text">
								<span id="eyePass" class="fas fa-eye"></span>
								<!-- fa-eye-slash -->
							</div>
						</div>
					</div>
					<div class="row">
						<!-- /.col -->
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<!-- <div class='alert alert-danger'>$error</div> -->
				<!-- /.social-auth-links -->

				<!-- <p class="mb-1">
					<a href="forgot-password.html">Quên mật khẩu</a>
				</p> -->
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="public/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="public/plugins/toastr/toastr.min.js"></script>
	<script src="public/dist/js/adminlte.min.js"></script>
	<script src="public/bootstrap513/bootstrap.bundle.min.js"></script>

	<?php
	// PHP code to process something
	// Then generate JavaScript with Toastr based on the result
	echo "<script>";
	if (session()->has('error')) {
		$error_view = session('error');
		echo "toastr.error('$error_view');";
	}


	echo "</script>";
	?>


	<script>
		const showPass = document.getElementById('showPass');
		const eyePass = document.getElementById('eyePass');
		const pass = document.getElementById('pass');
		let showP = false;
		showPass.addEventListener('click', () => {
			showP = !showP;

			if (showP) {
				eyePass.setAttribute('class', 'fas fa-eye-slash');
				pass.setAttribute('type', 'text')
			} else {
				eyePass.setAttribute('class', 'fas fa-eye');


				pass.setAttribute('type', 'password')
			}
		})
	</script>
</body>

</html>