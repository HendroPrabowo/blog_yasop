<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Yayasan Soposurung</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('image/logo/yayasan_soposurung_logo.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-20">
				<form method="post" class="login100-form validate-form" action="{{ url('/login') }}">
					@csrf

					<!-- @error('email')
					<div class="alert alert-danger">
						<i class="fa fa-exclamation-triangle"></i>&nbsp;
						Email atau Password Salah
					</div>
					@enderror -->

					@if (session('status'))
					    <div class="alert alert-danger">
					        {{ session('status') }}
					    </div>
					@endif

					<span class="login100-form-title p-b-50">
						Admin Login
					</span>
					<span class="login100-form-avatar">
						<img src="{{ asset('image/logo/yayasan_soposurung_logo.png') }}" alt="YASOP">
					</span>

					<div class="wrap-input100 validate-input m-t-50 m-b-30" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<!-- <input class="input100" type="text" name="username"> -->
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
