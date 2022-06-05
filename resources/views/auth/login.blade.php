<x-layout-default>
    <x-jet-authentication-card>
        <h4 class="card-header">
            Login
        </h4>

        <div class="card-body">
            <x-jet-validation-errors class="mb-4"/>


            @if (session('status'))
                <div class="mb-4 alert alert-info">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="d-flex flex-column">
                    <x-jet-label for="email" value="{{ __('E-mail') }}"/>
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                 required autofocus/>
                </div>

                <div class="mt-4 d-flex flex-column">
                    <x-jet-label for="password" value="{{ __('Wachtwoord') }}"/>
                    <x-jet-input id="password" class="form-control" type="password" name="password" required
                                 autocomplete="current-password"/>
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember"/>
                        <span class="ml-2 text-sm text-gray-600">{{ __('Onthoud mij') }}</span>
                    </label>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-underline text-black" href="{{ route('password.request') }}">
                            {{ __('Wachtwoord vergeten?') }}
                        </a>
                    @endif

                    <x-jet-button class="btn btn-brand-blue">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-layout-default>
