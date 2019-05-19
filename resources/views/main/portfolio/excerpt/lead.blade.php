<a href="{{ route('portfolio.show', $slug) }}" class="PortfolioExcerptLead">
    <div class="PortfolioExcerptLead-inner" style="background-image: url({{ app('image')->crop(800, 600)->url($item['thumb']) }})">
        <div class="PortfolioExcerptLead-main">
            <h3 class="PortfolioExcerptLead-title">{{ $item['name'] }}</h3>
            <p class="PortfolioExcerptLead-description">{{ $item['description'] }}</p>
        </div>
    </div>
</a>
