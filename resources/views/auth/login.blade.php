<x-guest-layout>
<img class="img-fluid logo-dark mb-2" src="{{asset('/img/logo_kanakku.png')}}" alt="Logo">
<div class="loginbox">
			<div class="login-right">
				<div class="login-right-wrap">
    <x-auth-card>
        <x-slot name="logo">
       
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email"  class="block form-control mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
           

            <div class="form-group mt-4">
                    <label class="form-control-label">Password</label>
                    <div class="pass-group">
                        <input type="password" class="form-control pass-input" name="password" id="password">
                        <span class="fas fa-eye toggle-password"></span>
                    </div>
			</div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              <!--  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-button class="btn btn-lg btn-block btn-primary" >
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
           
    </x-auth-card>
    </div>
            </div>
        </div>
</x-guest-layout>
@push('scripts')
<script>
$(function() {
	
	if($('.toggle-password').length > 0) {
		$(document).on('click', '.toggle-password', function() {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(".pass-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}
	});
</script>
