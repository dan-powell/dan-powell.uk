<div class="ProjectExcerpt">
    <a href="{{ is_array($item['url']) ? route($item['url'][0], $item['url'][1] ?? null) : url($item['url']) }}" class="ProjectExcerpt-link"></a>
    <div class="ProjectExcerpt-inner">
        <div class="ProjectExcerpt-thumb">
            <img
            srcset="{{ app('image')->crop(800, 800)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(400, 400)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}" class="ProjectExcerpt-img"/>
        </div>
        <div class="ProjectExcerpt-details">
            <div class="ProjectExcerpt-info">
                <h2 class="ProjectExcerpt-title">
                    {{ $item['name'] }}
                </h2>
                @if(isset($item['sub']))
                    <p class="ProjectExcerpt-sub">
                        {{ $item['sub'] }}
                    </p>
                @endif
                @if(isset($item['description']))
                    <div class="ProjectExcerpt-description u-content">
                        {!! $item['description'] !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
