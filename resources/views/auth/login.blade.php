<x-guest-layout>
<div class="box">
    <div class="container">

        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-field">
                <x-input id="email" type="email" name="email" class="input" placeholder="Username" :value="old('email')" required autofocus />
                <i class='bx bx-user' ></i>
            </div>

            <!-- Password -->
            <div class="input-field">
                <x-input id="password" type="password" name="password" class="input" placeholder="Password" required autocomplete="current-password" />
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-field">
                <x-button type='submit' class="submit">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="two-col">
                <div class="one">
                   <input type="checkbox" name="remember" id="remember_me">
                   <label for="remember_me">{{ __('Remember Me') }}</label>
                </div>
                
                    @if (Route::has('password.request'))
                    <div class="two">
                        <a href="{{ route('password.request') }}" class="text-small">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif 
            </div>
{{-- 
            <!-- Remember Me -->
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                    <label class="custom-control-label" for="remember_me">{{ __('Remember Me') }}</label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('register') }}" class="text-small">Register</a>
                <x-button type='submit'>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div> --}}


        {{-- <x-slot name="logo">    
        </x-slot>

        <x-slot name="title">
            <h4>Login</h4>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="input-field">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />
                @if (Route::has('password.request'))
                    <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                    <label class="custom-control-label" for="remember_me">{{ __('Remember Me') }}</label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('register') }}" class="text-small">Register</a>
                <x-button type='submit'>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}
</x-guest-layout>
