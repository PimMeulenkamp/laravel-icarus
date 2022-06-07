<x-layout-default>
    <div class="container bg-white shadow-lg">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('order.store')  }}">
            @csrf

            <h5 class="mt-2">Bezorgadres</h5>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label for="street" class="form-label">{{ __('Straat') }}</label>
                    <input id="street" class="form-control" type="text" name="street" value="{{old('street')}}"
                           required autofocus autocomplete="name"/>
                </div>
                <div class="col-md-6 mt-2 mt-md-0">
                    <label for="street_number" class="form-label">{{ __('HuisNummer') }}</label>
                    <input id="street_number" class="form-control" type="text" name="street_number" value="{{old('street_number')}}"
                           required autofocus autocomplete="surname"/>
                </div>
            </div>
            <h5 class="mt-4">Account Gegevens</h5>
            <hr>
            <div class="row">
                <label for="city" class="form-label">{{ __('Stad') }}</label>
                <input id="city" class="form-control" value="Oldenzaal" type="text" name="city" value="{{old('city')}}"
                       required/>
            </div>
            <hr>

            <div class="mt-2 d-flex flex-column">
                <label for="zipcode" class="form-label">{{ __('PostCode') }}</label>
                <input id="zipcode" class="form-control" type="text" name="zipcode" value="{{old('zipcode')}}"
                       required/>
            </div>
            <div>
                <button class="btn btn-primary btn-lg">Versturen</button>
            </div>
        </form>
    </div>
</x-layout-default>
