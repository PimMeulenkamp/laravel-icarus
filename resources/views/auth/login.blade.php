<x-layout-default>
    <x-auther>
        <x-auth-error class="my-3"/>
        <div class="card">
            <h4 class="card-header">
                Login
            </h4>

            <div class="card-body">


                @if (session('status'))
                    <div class="mb-4 alert alert-info">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="d-flex flex-column">
                        <label for="email" class="form-label">{{ __('E-mail') }}</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                               required autofocus/>
                    </div>

                    <div class="mt-4 d-flex flex-column">
                        <label for="password" class="form-label">{{ __('Wachtwoord') }}</label>
                        <input id="password" class="form-control" type="password" name="password" required
                               autocomplete="current-password"/>
                    </div>

                    <div class="d-block mt-4">
                        <label for="remember_me" class="d-flex">
                            <input type="checkbox" class="form-check me-1" id="remember_me" name="remember"/>
                            <span class="ml-2 text-sm text-gray-600">{{ __('Onthoud mij') }}</span>
                        </label>
                    </div>

                    <div class="d-flex flex-column align-items-start justify-content-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-underline text-black" href="{{ route('password.request') }}">
                            {{ __('Wachtwoord vergeten?') }}
                        </a>
                    @endif

                        <button class="btn btn-brand-blue mt-3">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-auther>
</x-layout-default>
