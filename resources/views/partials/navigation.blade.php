<nav class="Navigation" role="navigation">
<!--
    <div class="_intro">
        <p><small>You are currently looking at: <strong class="_location">{{ Route::currentRouteName() }}</strong></small></p>
    </div>
-->
    <ul class="Navigation-root">
        @foreach(config('content.navigation.primary') as $item)
            <li class="Navigation-item @active($item['route'])is-active @endactive">
                <a href="{{route($item['route'])}}" class="Navigation-item-link {{$item['class']}}">{{$item['title']}}</a>
            </li>
        @endforeach
    </ul>
</nav>
