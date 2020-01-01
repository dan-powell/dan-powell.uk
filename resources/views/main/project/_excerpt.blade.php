<a href="{{ route('project.home', $item['slug']) }}" class="ProjectExcerpt">
    <div class="ProjectExcerpt-inner">
        <img
            srcset="{{ app('image')->crop(700, 800)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(350, 400)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}"/>
        <h3 class="ProjectExcerpt-title">
            {{ $item['name'] }}
        </h3>
    </div>
</a>
