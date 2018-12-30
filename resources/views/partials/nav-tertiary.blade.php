<nav class="NavTertiary" role="navigation">
    <ul>
        @foreach(config('content.navigation.tertiary') as $item)
            <li class="NavTertiary-item @active($item['route'])is-active @endactive">
                <a href="{{ route($item['route']) }}" class="NavTertiary-item-link">{{ $item['title'] }}</a>
            </li>
        @endforeach
    </ul>
</nav>
