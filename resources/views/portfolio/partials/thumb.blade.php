<a href="{{ route('portfolio.show', $slug) }}" class="Project">
    <img
        srcset="{{ app('image')->url('thumb.jpg') }} 2x"
        src="{{ app('image')->url('thumb.jpg') }}"
        alt="{{ $project['name'] }}"/>
    <div class="Project-titleWrapper">
        <h3 class="Project-title">{{ $project['name'] }}</h3>
    </div>
</a>
