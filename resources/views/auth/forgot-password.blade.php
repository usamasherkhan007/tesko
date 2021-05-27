<!DOCTYPE html>
<html>
<link href="<?php echo App::make('url')->to('/');?>/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
<head>
	<title>Forgot Password</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="<?php echo App::make('url')->to('/');?>/stackpath/scss/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Recover Password</h3>
				
			</div>
			<div class="card-body" >
					<x-guest-layout>
						<x-jet-authentication-card>
							<x-slot name="logo">
							</x-slot>
					
							<div class="mb-4 text-sm text-gray-600" style="color:white;">
							
								{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
							</div>
					
							@if (session('status'))
								<div class="mb-4 font-medium text-sm text-green-600">
									{{ session('status') }}
								</div>
							@endif
					
							<x-jet-validation-errors class="mb-4" />
					
							<form method="POST" action="{{ route('password.email') }}">
								@csrf
					
								  <div class="input-group form-group">
								<div class="input-group-prepend" style="margin-top: 4px;">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
									<x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Email" />
								</div>
					
								<div class="flex items-center justify-end mt-4">
									<x-jet-button style="margin-left: 79px; background: #ffc312;">
										{{ __('Email Password Reset Link') }}
									</x-jet-button>
								</div>
								<div class="" style="align-items: center;margin-left: 97px;margin-top: 5px;">
									<p style="color:white;">Back to ( <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a> )</p>
								</div>
							</form>
						</x-jet-authentication-card>
					</x-guest-layout>
</div>			
		
				
		</div>
	</div>
</div>
</body>
</html>