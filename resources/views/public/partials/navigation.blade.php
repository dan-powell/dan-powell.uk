<nav class="Navigation" role="navigation">
<!--
    <div class="_intro">
        <p><small>You are currently looking at: <strong class="_location">{{ Route::currentRouteName() }}</strong></small></p>
    </div>
-->
    <ul>
        <li class="Navigation-item @if(Route::currentRouteName() == 'home')is-active @endif">
            <a href="{{ route('home') }}" class="Navigation-item-link Navigation-item-link--about">About</a>
        </li>
        <li class="Navigation-item @if(Request::segment(1) == 'portfolio')is-active @endif">
            <a href="{{ route('projects.index') }}" class="Navigation-item-link Navigation-item-link--portfolio">Portfolio</a>
        </li>
        <li class="Navigation-item @if(Route::currentRouteName() == 'page.skills')is-active @endif">
            <a href="{{ route('page.skills') }}" class="Navigation-item-link Navigation-item-link--skills">Skills</a>
        </li>
    </ul>
</nav>