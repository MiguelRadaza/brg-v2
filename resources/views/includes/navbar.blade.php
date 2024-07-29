<section class="navbar-header">
    <h1><strong>Bible Reading Guide </strong><small>2.0</small></h1>
    <div class="nav-wrapper">
        @if (auth()->user())
            <img src="{{ auth()->user()->avatar }}" height="50px" width="50px" alt="{{ auth()->user()->name }}"
                class="rounded-circle" data-lock-picture="{{ auth()->user()->avatar }}">
            {{ auth()->user()->name }}
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-arrow-right-from-bracket logout-btn"></i>

                </button>
            </form>
        @else
            <a type="button" href="{{ route('login') }}" class="btn btn-default">Sign In</a>
        @endif
    </div>
</section>
