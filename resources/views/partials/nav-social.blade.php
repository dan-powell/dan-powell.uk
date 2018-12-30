<p>Find me on:</p>

<ul class="NavSocial">
    @foreach(config('content.navigation.secondary') as $item)
        <li class="NavSocial-item @active($item['route'])is-active @endactive">
            <a href="{{ $item['url'] }}" class="NavSocial-link {{$item['class']}}">{{ $item['title'] }}</a>
        </li>
    @endforeach
</ul>
