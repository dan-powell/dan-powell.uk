<a href="{{ route('portfolio.show', $slug) }}" class="PortfolioExcerpt">
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
        </h3>
    </div>
</a>
