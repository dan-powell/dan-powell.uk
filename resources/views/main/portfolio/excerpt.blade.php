<a href="{{ route('portfolio.show', $slug) }}" class="PortfolioExcerpt">
    <div class="PortfolioExcerpt-inner">
        <img
            srcset="{{ app('image')->crop(800, 700)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(400, 350)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}"/>
        <h3 class="PortfolioExcerpt-title">
            {{ $item['name'] }}
        </h3>
    </div>
</a>
