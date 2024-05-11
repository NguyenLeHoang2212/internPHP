
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    	<div class="row">
    		<div class="col-md-3">
    		    <img src="https://scocre.com/assets/img/forgot.png" class="img-fluid" alt="">
    		</div>
    		<div class="col-md-9" style="padding-top:100px">
    		    <h2 class="font-weight-light">Forgot your password?</h2>
    		    Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="btn btn-lg btn-success">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
    		</div>
    	</div>
    </div>
