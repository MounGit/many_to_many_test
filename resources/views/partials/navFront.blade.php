<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('form')}}">Contact</a>
    </li>
    @auth

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
        </li>

        <li class="nav-item">
            <form class="nav-link" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </li>

    @else

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Log in</a>
        </li>

        @if (Route::has('register'))

            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @endif

    @endauth
</ul>
