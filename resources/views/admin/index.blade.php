
<!DOCTYPE html>
<html>
    
<head>
	<title>Admin Login - Shopping Cart</title>
    <link rel="shortcut icon" href="{{{ asset('adminStatic/img/favicon.png') }}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="{{URL::asset('adminStatic/css/index.css')}}" >
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{ asset('adminStatic/img/favicon.png')}}" class="brand_logo" alt="Logo">
					</div>
				</div>
				<span></span>
				<div class="d-flex justify-content-center form_container">
					<form action = "{{url('admin')}}" method = "POST">
						@if (Session::has('credentialError'))
							<p class="text-danger">{{Session::get('credentialError')}}</p>
							{{Session::put('credentialError',null)}}
						@elseif (Session::has('sessionError'))
							<p class="text-danger">{{Session::get('sessionError')}}</p>
							{{Session::put('sessionError',null)}}
						@endif
                   		{{csrf_field()}}
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit"  class="btn login_btn">Login</button>
                        </div>
					</form>
				</div>
				
                <!-- <button type="submit" >Login</button> -->
			</div>
		</div>
	</div>
</body>
</html>
