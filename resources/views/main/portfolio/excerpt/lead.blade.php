<a href="{{ route('portfolio.show', $slug) }}" class="PortfolioExcerptLead">
    <div class="PortfolioExcerptLead-image">
        <img src="{{ app('image')->crop(800, 400)->url($item['thumb']) }}" alt="{{ $item['name'] }}" class="PortfolioExcerptLead-img"/>
    </div>
    <div class="PortfolioExcerptLead-main">
        <h3 class="PortfolioExcerptLead-title">{{ $item['name'] }}</h3>
        <p>{{ $item['description'] }}</p>
    </div>
</a>
