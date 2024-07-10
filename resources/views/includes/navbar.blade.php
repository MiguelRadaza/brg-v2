<section class="navbar-header">
    <h1><strong>Bible Reading Guide </strong><small>2.0</small></h1>
    <div>
        @if (auth()->user())
            {{ auth()->user()->name }}
        @else
            <a type="button" href="{{ route('login') }}" class="btn btn-default">Sign In</a>
        @endif
    </div>
</section>
