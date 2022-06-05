<x-layout-default>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{--            <x-jet-authentication-card-logo />--}}
        </x-slot>

        <h4 class="card-header">
            Maak een account
        </h4>

        <div class="card-body">
            <x-jet-validation-errors class="mb-4"/>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}"/>
                    <x-jet-input id="email" class="form-control" type="email" name="email"
                                 :value="old('email', $request->email)" required autofocus/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}"/>
                    <x-jet-input id="password" class="form-control type=" password
                    " name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                    <x-jet-input id="password_confirmation" class="form-control" type="password"
                                 name="password_confirmation" required autocomplete="new-password"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="btn btn-brand-blue">
                        {{ __('Herstel wachtwoord') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-layout-default>
