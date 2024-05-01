



@extends('layouts.app')
@section('content')

<section class="bg-[#5bb4b8] mt-12">
	      <div
                    class="flex w-full max-w-[440px] items-center gap-2 lg:absolute lg:end-6 lg:top-6 lg:max-w-full">
                    <a href="/" class="block w-8 lg:hidden">
                        <img src="{{asset('images/reserv.jpeg')}}" alt="Cover Image" class="w-full" />
                    </a>
                </div>
	<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

		<div class="w-full bg-[#6fbbc1] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
			<div class="p-6 space-y-4 md:space-y-6 sm:p-8">
				<h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
					Sign in to your account
				</h1>
				<form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
					@csrf
					<div>
						<label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Your email</label>
						<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div>
						<label for="password" class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
						<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="flex items-center justify-between">
					
						<a href="{{ route('password.request') }}" class="text-sm font-medium text-white hover:underline dark:text-primary-500">Forgot password?</a>
					</div>
					<button type="submit" class="w-full text-dark bg-white hover:bg-primary-00 focus:ring-4 focus:outline-none focus:ring-primary-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
					<p class="text-sm font-light text-gray-200 dark:text-gray-400">
						Don’t have an account yet? <a href="{{ route('register') }}" class="font-medium text-dark hover:underline dark:text-primary-500">Sign up</a>
					</p>
				</form>
			</div>
		</div>
	</div>
  </section>









{{-- 
  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	<title>Login</title>
</head>
<body>
	<div class="login-wrap">
	<div class="login-html">
		<div>
			<h1 style="text-align: center;color: #1161ee;margin-bottom: 60px;font-family: 'nunito';font-weight: normal;">LearnToCode University</h1>
		</div>
		
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="{{ route('login') }}" method="POST">
					@csrf
					<div class="group">
						<label for="user" class="label">Email</label>
						<input id="user" type="email" name="email" class="input @error('email') is-invalid @enderror" required autocomplete="email" autofocus value="{{ old('email') }}">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="password" type="password" class="input @error('password') is-invalid @enderror" data-type="password" required autocomplete="current-password">
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<label for="check"><span class="icon"></span> Remember Me</label>
					</div>
                    <div class="foot-lnk">
						<a href="{{ route('password.request') }}">Forgot Password?</a>
					</div><br/>
					<div class="group">
						<input type="submit" class="button" value="Sign In">
					</div><br/>
					
			
					<div class="hr"></div>
				
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html> --}}
