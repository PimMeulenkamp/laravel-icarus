<x-layout-default>
    <x-auther>
        <div class="card">
            <h4 class="card-header">
                Maak een account
            </h4>

            <div class="card-body">
                <x-jet-validation-errors class="mb-4"/>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="block">
                        <label for="email" class="form-label">{{ __('E-mail') }}</label>
                        <input id="email" class="form-control" type="email" name="email"
                               :value="old('email', $request->email)" required autofocus/>
                    </div>

                    <div class="mt-4">
                        <label for="password" class="form-label">{{ __('Wachtwoord') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required
                               autocomplete="new-password"/>
                    </div>

                    <div class="mt-4">
                        <label for="password_confirmation" class="form-label">{{ __('Bevestig Wachtwoord') }}</label>
                        <x-jet-input id="password_confirmation" class="form-control" type="password"
                                     name="password_confirmation" required autocomplete="new-password"/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="btn btn-brand-blue">
                            {{ __('Herstel wachtwoord') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-auther>
</x-layout-default>
