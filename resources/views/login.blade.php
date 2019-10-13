<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
</head>
<body id="LoginForm">
	<div class="container">
		<h1 class="form-heading">login Form</h1>
		<div class="login-form">
			<div class="main-div">
			    <div class="panel">
				   <h2>Admin Login</h2>
				   <p>Please enter your email and password</p>
				</div>
				@if(Session::has('msg'))
                <div class="alert alert-danger">
                	<strong>{{ Session::get('msg') }}</strong>
                </div>
				@endif
			    <form id="Login" method="post" action="{{ URL::to('loginstore') }}">
			    	{{ csrf_field() }}
				    <div class="form-group">
				        <input type="email" name="email" class="form-control" placeholder="Email Address">
				    </div>
				    <div class="form-group">
				        <input type="password" name="password" class="form-control" placeholder="Password">
				    </div>
			        <button type="submit" class="btn btn-primary">Login</button>
			    </form>
		    </div>
		</div>
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>