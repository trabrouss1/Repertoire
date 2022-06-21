{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>{{ config('app.name') }}</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/feathericon.min.css">
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<link rel="stylesheet" href="css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="img/logo.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">M'inscrire</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
                                    <div>
                                        <x-label for="name" :value="__('Nom')" />
                                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="mt-4">
                                        <x-label for="email" :value="__('E-mail')" />
                                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Mot de passe')" />
                                        <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                    </div>
                                </div>
								<div class="form-group">
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />
                                        <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <x-button class="btn btn-primary btn-block">
                                            {{ __('M\'isncrire') }}
                                        </x-button>
                                    </div>

                                <div class="form-group my-3">
                                    <a class="my-2" href="{{ route('login') }}">
                                        {{ __('Déjà un compte?') }}
                                    </a>
                                </div>
							</form>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Register with</span> <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Avez-vous déjà un compte? <a href="{{ route('login') }}">Me connecter</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>
