@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger">
            <div class="fw-bold" style="font-size: 18px;">{{ __('Oeps! Er is een fout opgetreden.') }}</div>

            <ul class="mt-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
