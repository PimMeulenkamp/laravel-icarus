<x-layout-default>
    <div class="container mt-6">
        <a href="{{url()->previous()}}" class="d-flex back flex-row align-items-center">
            <i class="fa-solid fa-chevron-left"></i><span class="ps-2">{{ 'Terug' }}</span>
        </a>
        <h2>{{ 'Mijn Account' }}</h2>
        <div class="row">
            <div class="col-md-3">
               <div class="sticky-top" style="top: 10rem">
                   <a class="mb-2" href="{{ route('account.index') }}">{{ 'Mijn Account' }}</a>
                   <form method="POST" action="{{ route('logout') }}">
                       @csrf
                       <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                           {{ 'Uitloggen' }}
                       </a>
                   </form>
               </div>
            </div>
            <div class="col-md-9 bg-white shadow-lg p-4">
                @foreach($orders as $order)
                    <div class="d-flex flex-row w-100 justify-content-between">
                        <div class="flex-column">
                            <h6 class="fw-bold">{{ "ORDER #" }}{{$order->id}} </h6>
                            <p>{{ "Status: " }}<span class="text-brand-blue fw-bold">{{$order->status->name}}</span></p>
                            <p class="text-black-50">{{ "geplaast op " }}{{ $order->created_at }}</p>
                        </div>
                        <div class="d-flex align-items-end">
                            <a class="d-inline-block text-white btn btn-lg btn-brand-blue" href="">{{ 'Bekijk details' }}</a>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</x-layout-default>
