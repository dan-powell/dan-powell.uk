<a href="{{ route('portfolio.show', $slug) }}" class="PortfolioExcerpt">
    <img
        srcset="{{ app('image')->blur(20)->crop(800, 700)->url($item['thumb']) }} 2x"
        src="{{ app('image')->blur(20)->crop(400, 350)->url($item['thumb']) }}"
        alt="{{ $item['name'] }}"
        class="PortfolioExcerpt-blur"/>
    @if(isset($marker) && !empty($marker))
        <div class="PortfolioExcerpt-marker">
            {{!! $marker !!}}
        </div>
    @endif
    <div class="PortfolioExcerpt-inner">
        <img
            srcset="{{ app('image')->crop(800, 700)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(400, 350)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}"
            class="PortfolioExcerpt-bg"/>
        @if(isset($item['logo']))
            <img src="{{ $item['logo'] }}" alt="{{ $item['name'] }}" class="PortfolioExcerpt-logo"/>
        @endif
        <h3 class="PortfolioExcerpt-title">
            {{ $item['name'] }}
            {{ $item['sub'] ?? ''}}
        </h3>
    </div>
</a>
