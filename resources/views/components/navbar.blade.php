<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Krentenbollenactie.nl</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item {{ request()->path() == "/" ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home</a>
                </li>

                @if(auth()->check())
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="account" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="account">
                            <li><a class="dropdown-item" href="{{ route('account.index') }}"><i
                                        class="fa-solid fa-user me-2"></i>Account</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();this.closest('form').submit();">
                                        <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>{{ 'Uitloggen' }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('cart.index')}}" class="nav-link">
                            @livewire('shopping-cart')
                        </a>
                    </li>
                @else
                    <li class="nav-item {{ request()->path() == "login" ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ request()->path() == "register" ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
