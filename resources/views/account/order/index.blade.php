<x-layout-default>
    <div class="container mt-6">
        <a href="{{url()->previous()}}" class="d-flex back flex-row align-items-center mb-1">
            <i class="fa-solid fa-chevron-left"></i><span class="ms-2">{{ 'Terug' }}</span>
        </a>
        <div class="bg-white rounded shadow-lg my-4 p-4 me-n2">
            <h1 class="fw-bold">Mijn account</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquam aliquid assumenda, commodi
                enim esse eum ex maxime nesciunt odio, perferendis quae qui recusandae soluta ullam unde voluptatem.
                Odit?</p>
        </div>
        {{--        <div class="row mb-3">--}}
        {{--            <div class="col-md-3">--}}
        {{--                <h2 class="fw-bold">{{ 'Mijn Account' }}</h2>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-9">--}}
        {{--                <h2 class="ms-n2 fw-bold">{{ 'Bestellingen' }}</h2>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="row">
            <div class="col-md-3">
                <div class="sticky-top bg-white d-inline-block p-4 shadow-lg account-menu rounded" style="top: 10rem">
                    <a class="mb-2 ac-item text-brand-blue" href="{{ route('account.index') }}"><i
                            class="fa-solid fa-user me-2"></i>{{ 'Mijn Account' }}</a>
                    <form method="POST" action="{{ route('logout') }}" class="mt-3">
                        @csrf
                        <a class="ac-item text-black" href="{{ route('logout') }}"
                           onclick="event.preventDefault();this.closest('form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>{{ 'Uitloggen' }}
                        </a>
                    </form>
                </div>
            </div>
            <div class="col-md-9 bg-white shadow-lg p-4 rounded">
                @foreach($orders as $order)
                    <div class="d-flex flex-row w-100 justify-content-between">
                        <div class="flex-column">
                            <h6 class="fw-bold">{{ "ORDER #" }}{{$order->id}} </h6>
                            <p>{{ "Status: " }}<span class="text-brand-blue fw-bold">{{$order->status->name}}</span></p>
                            <p class="text-black-50">{{ "geplaast op " }}{{ $order->created_at }}</p>
                        </div>
                        <div class="d-flex align-items-end">
                            <a class="d-inline-block text-white btn btn-lg btn-shadow btn-brand-blue"
                               href="">{{ 'Bekijk details' }}</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-layout-default>
