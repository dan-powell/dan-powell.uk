<li class="Nav-item">
    <a class="Nav-link" href="{{ $url }}">
        @isset($icon)
            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ $icon }}"></use>
            </svg>
        @endisset
        <span class="Nav-link-inner">
            <span class="Nav-link-text">{{ $label }}</span>
        </span>
        @isset($items)
            <ul class="Nav-sub">
                @foreach($items as $item)
                    @component('sidebar.components.item')
                        @slot('url',  $item['url'])
                        @slot('label', $item['label'])
                    @endcomponent
                @endforeach
            </ul>
        @endisset
    </a>
</li>
