<x-layout-default>
    <x-auther>
        <div class="card">
            <h4 class="card-header">
                Maak MFA aan
            </h4>

            <div class="card-body">
                <div x-data="{ recovery: false }">
                    <div class="mb-4 text-sm text-gray-600" x-show="! recovery">
                        {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                    </div>

                    <div class="mb-4 text-sm text-gray-600" x-show="recovery">
                        {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                    </div>

                    <x-jet-validation-errors class="mb-4"/>

                    <form method="POST" action="{{ route('two-factor.login') }}">
                        @csrf

                        <div class="mt-4" x-show="! recovery">
                            <label for="code" value="{{ __('Code') }}"/>
                            <input id="code" class="form-control" type="text" inputmode="numeric" name="code"
                                   autofocus x-ref="code" autocomplete="one-time-code"/>
                        </div>

                        <div class="mt-4" x-show="recovery">
                            <label for="recovery_code" class="form-label">{{ __('Recovery Code') }}</label>
                            <input id="recovery_code" class="form-control" type="text" name="recovery_code"
                                   x-ref="recovery_code" autocomplete="one-time-code"/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="button" class="btn btn-danger"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                                {{ __('Use a recovery code') }}
                            </button>

                            <button type="button" class="btn btn-info"
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                                {{ __('Use an authentication code') }}
                            </button>

                            <button class="ml-4 btn btn-brand-blue">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-auther>
</x-layout-default>
