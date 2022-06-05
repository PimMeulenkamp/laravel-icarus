<x-layout-default>
    <x-auther>
        <div class="card">
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
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input id="email" class="form-control" type="email" name="email"
                               :value="old('email')" required autofocus/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="btn btn-brand-blue">
                            {{ __('Email Wachtwoord Herstel Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-auther>
</x-layout-default>
