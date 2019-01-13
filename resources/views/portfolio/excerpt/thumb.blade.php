<a href="{{ route('portfolio.show', $slug) }}" class="Project">
    <img
        srcset="{{ app('image')->crop(800, 800)->url($item['thumb']) }} 2x"
        src="{{ app('image')->crop(400, 400)->url($item['thumb']) }}"
        alt="{{ $item['name'] }}"/>
    <div class="Project-titleWrapper">
        <h3 class="Project-title">{{ $item['name'] }}</h3>
    </div>
</a>
