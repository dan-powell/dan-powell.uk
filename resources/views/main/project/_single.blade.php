<a href="{{ is_array($item['url']) ? route($item['url'][0], $item['url'][1] ?? null) : url($item['url']) }}" class="ProjectSingle">
    <div class="ProjectSingle-inner">
        <img
            srcset="{{ app('image')->crop(800, 800)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(400, 400)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}"
            class="ProjectSingle-bg"/>
        @if(isset($item['logo']))
            <img src="{{ $item['logo'] }}" alt="{{ $item['name'] }}" class="ProjectSingle-logo"/>
        @endif
        <h3 class="ProjectSingle-title">
            {{ $item['name'] }}
            {{ $item['sub'] ?? ''}}
        </h3>
    </div>
</a>
