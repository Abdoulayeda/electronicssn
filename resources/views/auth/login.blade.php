{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
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

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

 @extends('layouts.app')
 @section('content')

 <div class="container col-lg-6 mt-5">
     @if($errors->any())

         <div class="alert alert-danger">
             @foreach ($errors->all() as $error)
                 {{ $error }}
             @endforeach
         </div>

 @endif
     <form action="{{ route('login') }}" method="POST" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
         @csrf
         <div class="mb-3">
           <label class="form-label"  for="si-email">Adresse email</label>
           <input class="form-control" name="email" type="email" id="si-email" placeholder="Votre email" required>
           <div class="invalid-feedback">Entrez un email valide.</div>
         </div>
         <div class="mb-3">
           <label class="form-label" for="si-password">Mot de passe</label>
           <div class="password-toggle">
             <input class="form-control" name="password" type="password" id="si-password" required>
             <label class="password-toggle-btn" aria-label="Show/hide password">
               <input class="password-toggle-check" type="checkbox">
                <span class="password-toggle-indicator"></span>
             </label>
           </div>
         </div>
         <div class="mb-3 d-flex flex-wrap justify-content-between">
           <div class="form-check mb-2">
             <input class="form-check-input" type="checkbox" id="si-remember">
             <label class="form-check-label" name="remember" for="si-remember">Se souvenir de moi</label>
           </div><a class="fs-sm" href="{{ route('password.request') }}">Mot de passe oublié?</a>
         </div>
         <button class="btn btn-primary btn-shadow d-block w-100 mb-4" type="submit">Se connecter</button>
       </form>
 </div>

   @endsection
