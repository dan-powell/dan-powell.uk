<li class="Nav-item">
    <a class="Nav-link" href="{{ is_array($url) ? route($url[0], $url[1] ?? null, $url[2] ?? null) : url($url) }}">
        @isset($icon)
            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ asset($icon) }}"></use>
            </svg>
        @endisset
        <span class="Nav-link-inner">
            @isset($prefix)
                <small class="Nav-link-description">{{ $prefix }}</small>
            @endif
            <p class="Nav-link-label">{{ $label }}</p>
            @isset($suffix)
                <small class="Nav-link-description">{{ $suffix }}</small>
            @endif
        </span>
        @isset($items)
            <ul class="Nav-sub">
                @foreach($items as $item)
                    @component('sidebar.components.item')
                        @slot('url', $item['url'] ?? null)
                        @slot('icon', $item['icon'] ?? null)
                        @slot('prefix', $item['prefix'] ?? null)
                        @slot('label', $item['label'] ?? null)
                        @slot('suffix', $item['suffix'] ?? null)
                        @slot('items', $item['items'] ?? null)
                    @endcomponent
                @endforeach
            </ul>
        @endisset
    </a>
</li>
