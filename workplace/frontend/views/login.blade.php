<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page - Sistem Informasi Laboratorium</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ base_url("assets/css/login.css") }}">
</head>
<body>
	<div class="fullscreen container-fluid">
		<div class="row">
			<div class="logo col-xs-12 col-sm-4 col-md-4">
				<div class="row">
					<h1>SiLab</h1>
					<h2>Sistem Informasi Laboratorium</h2>
				</div>
			</div>
			<div class="form col-xs-12 col-sm-8 col-md-8">
				<div class="full form-login">
					<h1 class="indent">Login to your admin account</h1>
					<form class="indent" action="{{ base_url('login/me') }}" method="POST">
						<input type="hidden" name="{{ $this->security->get_csrf_token_name() }}" value="{{ $this->security->get_csrf_hash() }}">
						<div class="col-xs-12 col-sm-8 col-md-6">
							<div class="form-group">
								<div class="input-group">
									<span class="flat input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input name="username" type="text" class="flat form-control" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="flat input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input name="password" type="password" class="flat form-control" placeholder="Password">
								</div>
							</div>
							<div class="pull-right">
								<button type="submit" class="flat btn btn-info">Login</button>
							</div>
						</div>
					</form>
				</div>
				<div class="footer">
					<div class="pull-left"><a href="{{ base_url() }}">Back to Home</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Custom JS -->
	<script src="{{ base_url("assets/js/login.js") }}"></script>
</body>
</html>
