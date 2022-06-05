<x-layout-default>
    <x-auther>
        <div class="card">
            <h4 class="card-header">Bevestig uw email</h4>

            <div class="card-body">
                <p>
                    {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 alert alert-success">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif

                <div class="mt-4 flex items-center justify-between">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <div>
                            <button class="btn btn-success" type="submit">
                                {{ __('Verstuur verificatie e-mail nogmaals') }}
                            </button>
                        </div>
                    </form>

                    <div>
                        <a
                            href="{{ route('profile.show') }}"
                        >
                            {{ __('Bewerk profiel') }}</a>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                                {{ __('Log uit') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-auther>
</x-layout-default>
