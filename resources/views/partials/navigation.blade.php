<nav class="Navigation" role="navigation">
<!--
    <div class="_intro">
        <p><small>You are currently looking at: <strong class="_location">{{ Route::currentRouteName() }}</strong></small></p>
    </div>
-->

    <ul>
        <li class="_item @if(Route::currentRouteName() == 'home') -active @endif">
            <a href="{{ route('home') }}" class="_link -about">About</a>
        </li>
        <li class="_item @if(Request::segment(1) == 'portfolio') -active @endif">
            <a href="{{ route('projects.index') }}" class="_link -portfolio">Portfolio</a>
        </li>
        <li class="_item @if(Route::currentRouteName() == 'static.skills') -active @endif">
            <a href="{{ route('static.skills') }}" class="_link -skills">Skills</a>
        </li>
    </ul>
</nav>