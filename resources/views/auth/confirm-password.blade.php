<x-layout-default>
    <x-auther>
        <div class="card">
            <div class="mb-4 alert alert-info">
                {{ __('Voor dat je verder gaat moet je eerst je wachtwoord opnieuw invullen') }}
            </div>
            <h4 class="card-header">
                Bevestig wachtwoord
            </h4>

            <x-jet-validation-errors class="mb-4"/>
            <div class="card-body">
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div>
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required
                               autocomplete="current-password" autofocus/>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-danger">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-auther>
</x-layout-default>
