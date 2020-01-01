<a href="{{ route('project.home', $item['slug']) }}" class="ProjectSingle">
    <div class="ProjectSingle-inner">
        <img
            srcset="{{ app('image')->crop(800, 700)->url($item['thumb']) }} 2x"
            src="{{ app('image')->crop(400, 350)->url($item['thumb']) }}"
            alt="{{ $item['name'] }}"
            class="ProjectSingle-bg"/>
        @if(isset($item['logo']))
            <img src="{{ $item['logo'] }}" alt="{{ $item['name'] }}" class="ProjectSingle-logo"/>
        @endif
        <h3 class="ProjectSingle-title">
            {{ $item['name'] }}
            {{ $item['sub'] ?? ''}}
        </h3>
    </div>
</a>
