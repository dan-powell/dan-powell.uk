<a href="{{ route('portfolio.show', $slug) }}" class="ProjectExcerptLead">
    <div class="ProjectExcerptLead-image">
        <img src="{{ app('image')->crop(800, 400)->url($item['thumb']) }}" alt="{{ $item['name'] }}" class="ProjectExcerptLead-img"/>
    </div>
    <div class="ProjectExcerptLead-main">
        <h3 class="ProjectExcerptLead-title">{{ $item['name'] }}</h3>
        <p>{{ $item['description'] }}</p>
    </div>
</a>
