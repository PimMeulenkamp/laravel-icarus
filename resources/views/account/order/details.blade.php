<x-layout-default>
    <div class="container bg-white shadow-lg">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h5 class="mt-2">Bezorgadres</h5>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label for="name" class="form-label">{{ __('Voornaam') }}</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')"
                           required autofocus autocomplete="name"/>
                </div>
                <div class="col-md-6 mt-2 mt-md-0">
                    <label for="name" class="form-label">{{ __('Achternaam') }}</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('surname')"
                           required autofocus autocomplete="surname"/>
                </div>
            </div>
            <h5 class="mt-4">Account Gegevens</h5>
            <hr>

            <div class="mt-2 d-flex flex-column">
                <label for="email" class="form-label">{{ __('E-mail') }}</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                       required/>
            </div>

            <div class="mt-2 d-flex flex-column">
                <label for="password" class="form-label">{{ __('Wachtwoord') }}</label>
                <input id="password" class="form-control" type="password" name="password" required
                       autocomplete="new-password"/>
            </div>

            <div class="mt-2 d-flex flex-column">
                <label for="password_confirmation" class="form-label">{{ __('Herhaal Wachtwoord') }}</label>
                <input id="password_confirmation" class="form-control" type="password"
                       name="password_confirmation" required autocomplete="new-password"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-2">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="d-flex flex-column align-items-start justify-content-end mt-4">
                <a href="{{ route('login') }}">
                    {{ __('Heb je al een account? ') }}
                </a>

                <button class="btn btn-brand-blue mt-3">
                    {{ __('Registreer') }}
                </button>
            </div>
        </form>
    </div>
</x-layout-default>
