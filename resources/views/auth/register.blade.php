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
</x-guest-layout>
 --}}

 @extends('layouts.app')

@section('content')



 <div class="container ">

    @if($errors->any())
    <ul>
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    </ul>

    @endif

    <form action="{{ route('register') }}" method="post" class="form-group container col-lg-6 needs-validation tab-pane " autocomplete="off" novalidate id="signup-tab">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="su-name">Nom</label>
          <input class="form-control" name="name" type="text" id="su-name" placeholder="John Doe" required>
          <div class="invalid-feedback">Entrez votre  nom.</div>
        </div>
        <div class="mb-3">
          <label for="su-email">Address email </label>
          <input class="form-control" name="email" type="email" id="su-email" placeholder="votre email" required>
          <div class="invalid-feedback">Entrez un email valide.</div>
        </div>
        <div class="mb-3">
            <label>Téléphone </label>
            <input class="form-control" name="telephone" type="text" id="su-phone" placeholder="votre email" required>
            <div class="invalid-feedback">Entrez un numéro de telephone.</div>
          </div>

        <div class="mb-3">
          <label class="form-label" for="su-password">Mot de passe</label>
          <div class="password-toggle">
            <input class="form-control" name="password" type="password" id="su-password" required>
            <label class="password-toggle-btn" aria-label="Show/hide password">
              <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="su-password-confirm">Confirmer votre mot de passe</label>
          <div class="password-toggle">
            <input class="form-control" name="password_confirmation" type="password" id="su-password-confirm" required>
            <label class="password-toggle-btn" aria-label="Show/hide password">
              <input class="password-toggle-check"  type="checkbox">
                <span class="password-toggle-indicator"></span>
            </label>
          </div>
        </div>
        <button class="btn btn-primary btn-shadow d-block w-100 mb-3" type="submit">Enregistrer</button>
      </form>

 </div>
@endsection
