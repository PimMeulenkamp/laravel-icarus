<x-layout-default>
    <x-jet-authentication-card>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h4 class="card-header">
            Wachtwoord vergeten
        </h4>
        <div class="card-body">

            <p>
                {{ __('Wachtwoord vergeten? Geen probleem. Vul uw E-mail in en wij sturen je een mail met een link om een nieuw wachtwoord aan te maken.') }}
            </p>

            <x-jet-validation-errors class="mb-4"/>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}"/>
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                 :value="old('email')" required autofocus/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-layout-default>
